<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>

<p>出身地を選択してください。</p>
<form>
  <select>
    <?php
    $birthplaces = ['北海道地方','東北地方','関東地方','中部地方','近畿地方','中国・四国地方', '九州地方'];
     foreach($birthplaces as $value) {
      echo "<option>{$value}</option>";
     }
    ?>
  </select>
</form>
<p>
  <?php
   $user_names =['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

  //  検索したいユーザー名を代入する変数
  $target = '侍二郎';

  foreach($user_names as $user_name) {
    echo $user_name . '<br>';

    if($user_name === $target) {
      echo"{$target}さんが見つかったので、繰り返しを終了します。";
      break;
    }
  }
  ?>
</p>
<p>
  <?php
   $score =['国語' =>80,
            '数学' =>55,
            '理科' =>70,
            '社会' =>85,
            '英語' =>60];
    
      echo '合格した科目は以下の通りです。<br>';
      foreach($score as $key => $value) {
        if($value < 70){
          continue;
        }
        echo "{$key}:{$value}点<br>";
    }
  
  
  
  ?>
</p>
</body>
</html>