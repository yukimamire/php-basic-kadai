<?php
$dsn = 'mysql:dbname=php_db_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';

try {
  $pdo = new PDO($dsn,$user,$password);
  
  $sql_delete = 'DELETE FROM products  WHERE id = :id';
  $stmt_delete =$pdo->prepare($sql_delete);

  $stmt_delete->bindValue(':id',$_GET['id'],PDO::PARAM_INT);

  $stmt_delete->execute();

  $count =$stmt_delete->rowCount();

  header("Location:read.php?message={$message}");
} catch(PDOException $e) {
  exit($e->getMessage());
}