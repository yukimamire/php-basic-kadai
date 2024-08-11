<?php
$dsn = 'mysql:dbname=php_book_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';

try {
  $pdo = new PDO($dsn,$user,$password);

  $sql_delete = 'DELETE FROM books WHERE id = :id';

  $stmt_delete = $pdo->prepare($sql_delete);

  $stmt_delete->bindValue(':id',$_GET['id'],PDO::PARAM_STR);

  $stmt_delete->execute();

  $count = $stmt_delete->rowCount();

  $message = "商品を{$count}冊削除しました。";

  header("Location:read.php?message={$message}");
} catch (PDOException $e) {
  exit($e->getMessage);
}


  ?>