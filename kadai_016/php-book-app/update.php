<?php
$dsn = 'mysql:dbname=php_book_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';


if(isset($_GET['id'])) {
  try {
    $pdo = new PDO($dsn,$user,$password);

    $sql_select_book = 'SELECT * FROM books WHERE id = :id';
    $stmt_select_book = $pdo->prepare($sql_select_book);

    $stmt_select_book->bindValue(':id',$_GET['id'],PDO::PARAM_INT);

    $stmt_select_book->execute();

    $book = $stmt_select_book->fetch(PDO::FETCH_ASSOC);

    if($book === FALSE) {
      exit ('idパラメータの値が不正です。');
    }
    $sql_select_book_code = 'SELECT book_code FROM books';

    $stmt_select_book_code = $pdo->query($sql_select_book_code);

  $book_code = $stmt_select_book->fetchAll(PDO::FETCH_COLUMN);
  } catch (PDOException $e) {
    exit($e->getMessage());
  }
} else {
  exit('idパラメータの値が存在しません。');
}

?>

<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>商品管理アプリ</title>
     <link rel="stylesheet" href="../css/style.css">
 
     <!-- Google Fontsの読み込み -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
 </head>
 
 <body>
  <header>
    <nav>
      <a href="index.php">商品管理アプリ</a>
    </nav>
  </header>
   <main>
    <div class="registration">
     <h1>書籍登録</h1>
     <div class="back">
      <a href="read.php" class="back-btn">&lt; 戻る</a>
     </div>
    <form action="update.php?id=<?= $_GET['id'] ?>" method="post" class="registration-form">

     <div>
      <label for="book_code">書籍コード</label>
      <input type="number" id="book_code" name="book_code" value="<?= $book['book_code'] ?>" min="0" max="100000000" required>

      <label for="book_name">書籍名</label>
      <input type="text" id="book_name" name="book_name" value="<?=$book['book_name'] ?>" maxlength="50" required>

      <label for="price">単価</label>
      <input type="number" id="price" name="price" value="<?= $book['price'] ?>" min="0" max="100000000" required>

      <label for="stock_quantity">在庫数</label>
      <input type="number" id="stock_quantity" name="stock_quantity" value="<?= $book['stock_quantity'] ?>" min="0" max="100000000" required>

      <label for="genre_code">ジャンルコード</label>
      <select id="genre_code" name="genre_code" required>
      <option disabled selected value>選択してください</option>

      <?php
       foreach($genre_codes as $genre_code) {
        echo "<option value='{$genre_code}'>{$genre_code}</option>";
       }
      ?>
     </select>
    </div>     
   <button type="submit" name="submit" class="submit-btn" value="create">登録</button>
   </form>
     </main>
     </div>
     <footer>
      <p class="copyright">&copy; 商品管理アプリ All rights reserved.</p>
  </footer>
 </body>