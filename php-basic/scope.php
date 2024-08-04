<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php

      $user_name = '侍花子';

     function show_user_name() {
      // ローカル変数を定義
      $user_name = '侍太郎';

      // ローカルスコープの中で変数を使う
      echo $user_name . '<br>';
     }
    show_user_name();
    
    echo $user_name;
    ?>
  </p>
  
</body>
</html>