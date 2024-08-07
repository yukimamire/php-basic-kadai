<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
</head>
<body>
  <p>
  <?php
  try {
    // 現在の日付を取得
    $now = new DateTime();
    // ↓例外でエラー表示になる
    // $my_date = new DateTime('dummy-date')
    // ↓未来の日付のためエラーになる
    $my_date = new DateTime('3000-12-31');
    // $my_date = new DateTime('2024-08-06');

    // 指定された日付が未来の場合は例外をスロー
    if($now < $my_date) {
      throw new Exception('未来の日付は表示できません。');
    }
    echo $my_date->format('Y-m-d') .'<br>';
  } catch (Exception $e) {
    // 例外が発生した場合はメッセージを表示
    echo '例外発生:' .$e->getMessage() .'<br>';
  } finally {
    echo '日付の表示処理が終了しました。';
  }

?>
</p>
</body>
</html>