<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP for文</title>
</head>
<body>
  
  <p>
    <?php
      for ($i = 1; $i <= 10; $i++) {
        $num = mt_rand(1,20);
        echo "{$i}回目の結果は{$num}です。<br>";

        if($num === 20) {
          echo'20がでたので強制終了します';
          break;
        }
      }
      ?>
  </p> 

  <p>
    <?php
    for($i = 1; $i <= 10; $i++) {
      if($i % 2 === 0) {
        continue;
      }
      echo $i;
    }
    ?>
  </p>

 