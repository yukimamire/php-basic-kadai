<?php
$dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';


// 「更新」ボタンを押したときの処理
// isset数値がセットされていればtrueを返す
if(isset($_POST['submit'])) {

  try {
    $pdo = new PDO($dsn,$user,$password);
    
    // 追加する
    $sql = '
         UPDATE users 
         SET name = :name,
         furigana = :furigana,
         email = :email,
         age = :age,
         address = :address
         WHERE id = :id';
    
    
    $stmt = $pdo->prepare($sql);

  //  bindValueを使って実際の値をプレースホルダにバインドする
    $stmt->bindValue(':name',$_POST['user_name'],PDO::PARAM_STR);
    $stmt->bindValue(':furigana',$_POST['user_furigana'],PDO::PARAM_STR);
    $stmt->bindValue(':email',$_POST['user_email'],PDO::PARAM_STR);
    $stmt->bindValue(':age',$_POST['user_age'],PDO::PARAM_STR);
    $stmt->bindValue(':address',$_POST['user_address'],PDO::PARAM_STR);
    $stmt->bindValue(':id',$_GET['id'],PDO::PARAM_INT);

//  sqlを実行する
  $stmt->execute();

// header(）関数でselect.phpにリダイレクトさせる
header('Location: users.php');
} catch (PODException $e) {
  exit($e->getMessage());
}
}
// idパラメータの値が存在すれば処理を行う
if(isset($_GET['id'])) {
   try {
    $pdo = new PDO($dsn,$user,$password);
  
  
  $sql = 'SELECT * FROM users WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  
  $stmt->bindValue(':id',$_GET['id'],PDO::PARAM_INT);

  $stmt->execute();

  // SQL文の実行結果を配列で取得する
  $user = $stmt->fetch(PDO::FETCH_ASSOC);


  // idパラメータの値と同じidデータが存在しない場合はエラーで終了する
  if($user === FALSE) {
    exit('idパラメータの値が不正です。');
    }
  } catch(PODException $e) {
    exit($e->getMessage());
   }
} else {
  // idパラメータの値が存在しない場合はエラメッセを表示して処理を停止する。
  exit('idパラメータの値が存在しません。');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP+DB</title>
</head>
<body>
  <h1>ユーザー更新</h1>
  <p>更新する内容を入力してください。</p>

<form action="update.php?id=<?= $_GET['id'] ?>" method="post">
 <div>
  <label for="user_name">お名前<span>【必須】</span></label>
  <input type="text" id="user_name" name="user_name" value="<?= $user['name'] ?>" maxlength="60" required>

  <label for="user_furigana">ふりがな<span>【必須】</span></label>
  <input type="text" id="user_furigana" name="user_furigana" value="<?= $user['furigana'] ?>"maxlength="60" required>

  <label for="user_email">メースアドレス<span>【必須】</span></label>
  <input type="text" id="user_email" name="user_email" maxlength="255" value="<?= $user['email'] ?>" required>

  
  <label for="user_age">年齢</label>
  <input type="text" id="user_age" name="user_age" value="<?= $user['age'] ?>" min="13" max="130" required>
  
  <label for="user_address">住所</label>
  <input type="text" id="user_address" name="user_address" value="<?= $user['address'] ?>" maxlength="125" required>
  </div>

  <button type="submit" name="submit" value="update">更新</button>
</form>

 
</body>
</html>