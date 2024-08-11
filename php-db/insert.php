<?php
$dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';


// 「登録」ボタンを押したときの処理

// isset数値がセットされていればtrueを返す
if(isset($_POST['submit'])) {

  try {
    $pdo = new PDO($dsn,$user,$password);
    
    // 追加する
    $sql = '
        INSERT INTO users(name,furigana,email,age,address)
        VALUE (:name, :furigana, :email, :age, :address)';
    
    
    $stmt = $pdo->prepare($sql);

  //  bindValueを使って実際の値をプレースホルダにバインドする
    $stmt->bindValue(':name',$_POST['user_name'],PDO::PARAM_STR);
    $stmt->bindValue(':furigana',$_POST['user_furigana'],PDO::PARAM_STR);
    $stmt->bindValue(':email',$_POST['user_email'],PDO::PARAM_STR);
    $stmt->bindValue(':age',$_POST['user_age'],PDO::PARAM_STR);
    $stmt->bindValue(':address',$_POST['user_address'],PDO::PARAM_STR);

//  sqlを実行する
  $stmt->execute();

// header(）関数でselect.phpにリダイレクトさせる
header('Location: select.php');
} catch (PODException $e) {
  exit($e->getMessage());
}
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
  <h1>ユーザー登録</h1>
  <p>ユーザ情報を入力してください。</p>

<form action="insert.php" method="post">
 <div>
  <label for="user_name">お名前<span>【必須】</span></label>
  <input type="text" id="user_name" name="user_name" maxlength="60" required>

  <label for="user_furigana">ふりがな<span>【必須】</span></label>
  <input type="text" id="user_furigana" name="user_furigana" maxlength="60" required>

  <label for="user_email">メースアドレス<span>【必須】</span></label>
  <input type="text" id="user_email" name="user_email" maxlength="255" required>

  
  <label for="user_age">年齢</label>
  <input type="text" id="user_age" name="user_age" min="13" max="130" required>
  
  <label for="user_address">住所</label>
  <input type="text" id="user_address" name="user_address" maxlength="125" required>
  </div>

  <button type="submit" name="submit" value="insert">登録</button>
</form>

 
</body>
</html>