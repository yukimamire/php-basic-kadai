<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Validation</title>
</head>
<body>
  <p>
  <?php
  $name = '侍太郎';
  $password = 12345678;
  $email = 'samuraitarou@example.com';
  $gender = '男性';

  // 氏名が入力されているか
  if(empty($name)) {
     exit('氏名を入力してください。');
  }

  // passの文字条件をみたしているか
  if(mb_strlen($password) < 8) {
     exit('パスワードは8文字以上にしてください。');
  }

  // メールアドレスの形式になっているか
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    exit('メアドの形式が正しくありません。');
  }

  // リスト内の性別が指定されていｓるか
  if(!in_array($gender,['男性','女性','その他'])) {
    exit('正しい性別を指定してください。');
  }

  echo 'バリデーションの結果、問題ありませんでした。';

  ?>
</p>
  
</body>
</html>