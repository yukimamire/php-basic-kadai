<?php
$dsn ='mysql:dbname=hym7dno3374pd063;host=q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;charset=utf8mb4';
$user = 'pneogkealnqj8sdf';
$password = 'v52uwprsmbs83mfv';


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