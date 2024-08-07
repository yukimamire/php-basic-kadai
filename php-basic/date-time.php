<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    // 日本の今のタイムゾーン
    date_default_timezone_set('Asia/Tokyo');

    echo date('Y年n月j日H時i分s秒').'<br>';
    
    // 現在基準から1週間後の日時出力
    echo strtotime('+1 week') .'<br>';

   // 現在基準から3年前を出力
   echo date('Y/m/d H:i:s',strtotime('-3 year'));
    ?>
  </p>

  <?php

  // 指定した日時のインスタンスを作成する
  $date_time = new DateTime('2015-3-19 12:15:30');

  echo $date_time->format('y年n月j日H時i分s秒') . '<br>';

   $now = new DateTime();

   $interval = $now->diff($date_time);
   
   echo $interval->format('%y年%m月と%d日の差があります。総日数は%a日です') . '<br>';
  ?>
  </P>

  <p>
<!-- 日付の加算、減算 -->
  <?php
   $now = new DateTimeImmutable();

   $add = $now->modify('+1 year');

   $sub = $now->modify('-3 day');

   echo $add->format('現在から1年後はY年n月j日H時i分s秒です。');
   echo $sub->format('現在から3日前はY年n月j日H時i分s秒です。');
   ?>
  </p>

</body>
</html>