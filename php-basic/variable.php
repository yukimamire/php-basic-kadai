<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>PHP基礎編</title>
</head>
<body>
  <?php
  $user_name = '侍太郎';
  echo $user_name;
  echo '<br>';

  $user_name = '花子';
  echo $user_name;
  ?>
  <p>
    <?php
    $number = 3;
    echo $number - 1.2;
    echo'<br>';

    $my_name = '侍一郎';
    echo '私の名前は'. $my_name . 'です。';
    ?>

    <!-- 文字列の中で変数の中身を表示する方法 -->
    <p>
      <?php
      $my_name = '侍一郎';

      echo "私の名前は{$my_name}です。";
      ?>
    </p>
  </p>
</body>
</html>