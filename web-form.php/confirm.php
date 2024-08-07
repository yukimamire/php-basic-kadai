
<?php
// session開始
session_start();

// ポストリクエストから入力データを取得
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$gender = $_POST['user_gender'];
$category = $_POST['category'];
$message = $_POST['message'];

//  エラーメッセを格納する配列
 $errors = [];

//  名前のvalidation 
  if(empty($name)) {
    $errors[] = '名前を入力してください。';
  }

// メールアドレスのvalidation 
  if(empty($email)) {
    $errors[] = 'メールアドレスを入力してください。';
  } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メールアドレスの入力形式が正しくありません。';
  }

//  お問い合わせ内容のvalidation 
 if(empty($message)) {
  $errors[] = 'お問い合わせ内容を入力してください。';
 } elseif(mb_strlen($message) > 100) {
  $errors[] = 'お問い合わせ内容が100文字を超えています。';
 }

//  入力画面に問題がなければsession,cookieを保存
if(empty($errors)) {
  // session数の保存
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['gender'] = $gender;
  $_SESSION['category'] = $category;
  $_SESSION['message'] = $message;

// cookieを登録(有効期限1時間)
setcookie('name',$name,time() + 3600);
setcookie('email',$email,time() + 3600);

}
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>PHP 入力フォーム</title>
</head>

<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

<table border="2">
  <tr>
    <th>項目</th>
    <th>入力内容</th>
  </tr>
  <tr>
    <td>お名前</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>メースアドレス</td>
    <td><?php echo $email; ?></td>
  </tr>
  <tr>
    <td>性別</td>
    <td><?php echo $gender; ?></td>
  </tr>
  <tr>
    <td>お問い合わせ種別</td>
    <td><?php echo $category; ?></td>
  </tr>
  <tr>
    <td>お問い合わせ内容</td>
    <td><?php echo $message; ?></td>
  </tr>
</table>

<p>
  <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
  <button id="cancel-btn" onclick="history.back();">キャンセル</button>
</p>
<?php
// 入力項目にエラーがある場合の処理
if(!empty($errors)) {
// 配列内のエラーメッセを順番に処理
foreach ($errors as $error ) {
  echo '<font color="red">' .$error .'</font>' .'<br>';
}
// 確定ボタンを無効化するjsコードをブラウザ側に送信
echo '<script>document.getElementById("confirm-btn").disabled = true; </script>';
}


?>

</body>
</html>