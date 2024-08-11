<?php
    $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = '';


    try {
      $pdo = new PDO($dsn,$user,$password);

      // userテーブルからidカラムとnameカラムのデータを取得するためのSQL文を変数$sqlに代入する
      $sql = 'SELECT * FROM users';

      // SQL文を実行する

      $stmt = $pdo->query($sql);
      // fetchAllで取得する配列の形式を指定
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

      
    } catch (PDPException $e) {
      exit($e->getMessage());
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP+BD</title>
</head>
<!-- phpでデータを取得してみよう -->

<body>
  <table class="all-column">
    <tr>
      <th>ID</th>
      <th>氏名</th>
      <th>ふりがな</th>
      <th>メールアドレス</th>
      <th>年齢</th>
      <th>住所</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    <?php
    // 配列の中身を順番に取り出して、表形式で出力
    foreach($results as $result) {
       $table_row = "
         <tr>
         <td>{$result['id']}</td>
         <td>{$result['name']}</td>
         <td>{$result['furigana']}</td>
         <td>{$result['email']}</td>
         <td>{$result['age']}</td>
         <td>{$result['address']}</td>
         <td><a href='update.php?id={$result['id']}'>編集</a></td>
         <td><a href='delete.php?id={$result['id']}'>削除</a></td>
         </tr>
       ";
       echo $table_row;
    }

    ?>
  </table>
  
  
</body>
</html>