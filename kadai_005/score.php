<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP 平均点</title>
</head>
<body>
  <p>
    <?php
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7= 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    $total_score  = ($score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10)/10;

    echo $total_score;
    ?>
  </p>
  <P>
    <?php
    $shopping_food = ['name' => 'onion','price' => 200, 'weight' => 160];

     print_r($shopping_food);
     echo '<br>';

     foreach($shopping_food as $index=> $value) {
      echo "{$index}:{$value} <br>";
     }
    
    ?>
  </P>
  <p>
    <?php
     $num = [15,4,18,23,10];

     function sort_2way($array,$order) {

      if($order) {
       echo '昇順します';
       sort($array);
      } else {
        echo '降順します。';
        rsort($array);
      }
      foreach($array as $value) {
        echo $value;
     }
     }
    echo sort_2way($num,true);

     echo sort_2way($num,false);

     
    ?>
  </p>
</body>
</html>