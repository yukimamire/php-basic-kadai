<?php
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h2>入力をご確認ください。</h2>
  <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">

    <tr>
      <th>項目</th>
      <th>入力内容</th>
    <tr>
      <td>社員名</td>
      <td><?php echo $employee_name;?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $employee_age;?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department;?></td>
    </tr>
  </table>

  <p>
    <button id="ok-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>