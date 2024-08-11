<?php
    $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = '';


    try {
      $pdo = new PDO($dsn,$user,$password);

     if(isset($_GET['keyword'])) {
      $keyword = $_GET['keyword'];
     } else {
      $keyword = NULL;
     }

    $sql = 'SELECT name,furigana FROM users WHERE furigana LIKE :keyword';
    $stmt = $pdo->prepare($sql);

    // SQLのLIKE句で使うため、変数$keywordの前後を％で囲む
   //今回は一部一致  
    $partial_match = "%{$keyword}%";
    
    // 実際の値をプレースホルダーにバインドする
    $stmt->bindValue(':keyword',$partial_match, PDO::PARAM_STR);

    // SQL文を実行する
    $stmt->execute();

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
  <form action="where-like.php" method="get" class="search-form">
    <input type="text" placeholder="ふりがなで検索" name="keyword">
    <input type="submit" value="検索">
  </form>

  <table>
    <tr>
      <th>氏名</th>
      <th>ふりがな</th>
    </tr>
    <?php
    // 配列の中身を順番に取り出して、表形式で出力
    foreach($results as $result) {
      echo "<tr><td>{$result['name']}</td><td>{$result['furigana']}</td></tr>";
    }

    ?>
  </table>
  
  
</body>
</html>