<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    // 変数に1~6までのランダムな整数を代入
    //  mt_rand() 編

    $dice = mt_rand(1,6);

    echo "{$dice}の目が出ました";
    ?>
  </p>
<p>
<?php
// array_rand()編 

$omikuji = ['大吉','中吉','小吉','吉','末吉','凶','大凶'];

$key = array_rand($omikuji);

$result = $omikuji[$key];

echo "おみくじの結果は{$result}です。"
  


?>
</p>

    
    

</body>
</html>