<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    $user_names = ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];

    // 配列の値を出力する
    print_r($user_names);
    echo '<br>';

    $user_names[1] = '侍花子';
    //末尾に要素を追加する際は[]の方がミスが少なくなる
    $user_names[] = '侍五郎';

    print_r($user_names);
    echo '<br>';

    echo $user_names[2];
    ?>
  </p>
</body>
</html>