<?php
 // 型宣言と異なるデータ型の場合にエラーを発生させる
 declare(strict_types=1);
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
  
</head>
<body>
   <p>
    <?php
    // 朝の挨拶を出力する関数定義
      function say_good_morning() {
        echo 'おはようございます<br>';
        echo '昨日はよく眠れましたか<br>';
        echo '今日も一日頑張りましょう<br>';
      }
    // 夜の挨拶を出力する関数定義
    function say_good_evening() {
      echo 'こんばんは<br>';
      echo '今日も一日お疲れ様です<br>';
    }

    say_good_morning();

    say_good_evening();
    ?>
   </p>

   <p>
    <?php
     function cal($price,$shipping_free) {
      $total = $price + $shipping_free;

      echo $total .'円<br>';
     }

     cal(1200,500);
    ?>

   </p>

   <p>
    <?php
    function double($num) {
      return $num * 2;
    }
    
    echo double(30);
    ?>
     </p>
     <p>
      <?php
      // 引数の方型言
        function type_hinting_argument(int $num) {
          return $num * 2;
        }

        echo type_hinting_argument(5);
      ?>
     </p>

     <p>
      <?php
      // 戻り値に型宣言をしている
       function number($num): int {
        return $num * 2; 
       }
     echo number(3);

      ?>
     </p>
</body>
</html>