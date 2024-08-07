<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php
     error_log('エラー' ."\n",3,'C:\xampp\php\log\error.log');
     
     error_reporting(0);
     echo'全エラー無効' .'<br>';

    //  すべて無効のため、エラー出ない
    echo $dummy1;

    error_reporting(E_ALL);
    echo '全エラー有効';

    echo $dummy2;



?>
  </p>
</body>
</html>