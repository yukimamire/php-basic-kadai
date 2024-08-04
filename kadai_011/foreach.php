<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP foreach課題</title>
</head>
<body>
  <p>
    <?php
    $shopping = ['名前' => '玉ねぎ',
                 '値段' => 200,
                 '産地' => '北海道'];
      foreach($shopping as $key => $value) {
        echo "{$key}:{$value}<br>";
      }
      
    
    ?>
  </p>
  
</body>
</html>