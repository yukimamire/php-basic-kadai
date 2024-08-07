<?php

session_start();
// セッションに保存された「お名前」を取得
$name = isset($_SESSION['name']) ? $_SESSION['name']: '名無し';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP 入力フォーム</title>
</head>
<body>
  <h2><?php echo $name; ?>様、お問い合わせを承りました。</h2>
  <p>ありがとうございました。今後の参考にさせていただきます。</p>

  <button id="back-btn" onclick="location.href='form.php';">戻る</button>

  <?php
  // session変数を初期化
  $_SESSION = array();

// sessionを終了
session_destroy();
?>
</body>
</html>