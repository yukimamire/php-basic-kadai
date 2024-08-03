<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP連想配列</title>
</head>
<body>
  <p>
    <?php
      $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

     $personal_data['name'] = '侍花子';

     $personal_data['address'] = '東京都' ;

     print_r($personal_data);
     echo'<br>';

     echo $personal_data['gender'];
      ?>
  </p>
</body>
</html>