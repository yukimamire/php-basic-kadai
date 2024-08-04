<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    
     $nums = [15, 4, 18, 23, 10 ];
     
     
    function sort_2way($array,$order) {

      if($order) {
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        echo '降順します。<br>';
        rsort($array);
        
      }
      // arrayが処理対象
      foreach($array as $value) {
        echo $value;
        echo'<br>';
      }
    }
    // 仮引数分の実引数を渡す
     sort_2way($nums,true);

     echo'<br>';

     sort_2way($nums,false);
       
        ?>
  </p>
  
  
  
</body>
</html>