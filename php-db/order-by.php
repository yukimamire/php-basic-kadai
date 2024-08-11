<?php
    $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = '';


    try {
      $pdo = new PDO($dsn,$user,$password);

      if(isset($_GET['order'])) {
        $order = $_GET['order'];
      } else {
        $order = NULL;
      }

    if($order === 'asc') {
      $sql = 'SELECT id,name,age FROM users ORDER BY age ASC';
    }elseif ($order === 'desc') {
      $sql = 'SELECT id,name,age FROM users ORDER BY age DESC';
    } else {
      $sql = "SELECT id,name,age FROM users ORDER BY id";
    }
    

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
  <div class="sort">
    <a href="order-by.php?order=asc" class="sort-btn">年齢順(昇順)</a>
    <a href="order-by.php?order=desc" class="sort-btn">年齢順(降順)</a>

  </div>




  <table>
    <tr>
      <th>ID</th>
      <th>氏名</th>
      <th>年齢</th>

    </tr>
    <?php
    // 配列の中身を順番に取り出して、表形式で出力
    foreach($results as $result) {
      $table_row = "
      <tr>
      <td>{$result['id']}</td>
      <td>{$result['name']}</td>
      <td>{$result['age']}</td>
      </tr>";
      echo $table_row;
    }

    ?>
  </table>
  
  
</body>
</html>