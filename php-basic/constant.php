<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <p>
    <?php
       const SHIPPINGE_FEE = 500;

       echo SHIPPINGE_FEE;
      
    ?>
  </p>

  <p>
    <?php
    class Product {
      // クラス内に定数を定義
      public const TAX = 1.1;
    }

    // クラス内に定義された定数にアクセスする
    // クラスに直接アクセスするので::を使う
    echo Product::TAX;
?>
  </p>
  <p>
    <?php
    // 定数に配列を入れる
    const SEVEN_REGIONS =[
         '北海道地方',
         '東北地方',
         '関東地方',
         '中部地方',
         '近畿地方',
         '中国・四国地方',
         '九州地方'
    ];

  // 定数の中身を出力
  print_r(SEVEN_REGIONS);


?>
  </p>
  
</body>
</html>