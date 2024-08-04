<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP while文</title>
</head>
<body>
<p>
    <?php
    // numの値が0以外の時に出力し続ける
    $num = mt_rand(0,4);
    echo "最初の値は{$num}です。<br>";
      $i = 1;

    while ($num !== 0) {
      
      $num = mt_rand(0,4);
      echo "現在の値は{$num}です。<br>";

      if($i === 5) {
        echo '5回目になったので強制終了します';
        break;
      }
      $i++;
    }
    ?>
  </p>

  <p>
    <?php

  //  合計用の変数を用意
     $sum = 0;

     while ($sum < 20) {
      $num = mt_rand(0,10);

      echo "{$num}がでました。<br>";

      // 変数$numのあたいが偶数の時は加算せれない
      if($num % 2 === 0) {
        echo'偶数なので加算しません<br>';
        continue;
      }
      
       // 変数$sumに変数$numの値を加算する
      $sum += $num;
      echo "現在の値は{$sum}です。<br>";
     }
    ?>
  </p>
</body>
</html>
</body>
</html>