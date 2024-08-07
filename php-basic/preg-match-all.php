<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
</head>
<body>
    <h2>
    <?php
    $str = 'Appleが5個あります。Orangeは1個しかありません。';

    echo '検索対象:'.$str;
    ?>
    </h2>
  <p>
    <!-- 一致した文字列すべて -->
    <?php
     echo '英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';

     if(preg_match_all('/[a-zA-Z0-9]/',$str,$results)) {
      echo '>検索結果:';
      print_r($results);
     } else {
      echo '>正規表現に一致しませんでした。';
     }
    ?>
  </p>
  <p>
    <!-- 1回以上の繰り返し -->
    <?php
     echo '1回以上繰り返されている（1文字以上の）英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';

     if(preg_match_all('/[a-zA-Z0-9]+/',$str,$results) ) {
      echo '>検索結果:';
      print_r($results);
     } else {
       echo '>正規表現に一致しませんでした。';
     }
    ?>
  </p>
  <p>
    <!-- 改行以外のすべての文字 -->
    <?php
     echo '改行以外の1回以上繰り返されている（1文字以上の）文字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';
    if(preg_match_all('/.+/',$str,$results)) {
      echo '>検索結果：';
      print_r($results);
    } else {
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>

  <p>
    <!-- 0回以上の繰り返し -->
    <?php
    $str = 'あり';
    echo'検索結果:'. $str;
    
     echo '「あ」で始まって「り」で終わる文字列と完全に一致しているかどうかを正規表現で検索します。<br>';

     if(preg_match_all('/\Aあ.*り\z/',$str)) {
      echo '>正規表現に一致しました。';
     } else {
      echo '>正規表現に一致しませんでした。';
     }
    ?>
  </p>
  <h2>
     <?php
      $email = 'taro.samurai55@example.com';

      echo '検索対象:'.$email;
     ?>
  </h2>
  <p>
    <?php
    echo 'メールアドレスのフォーマットと完全に一致しているかどうかを正規表現で検索します。<br>';

    if(preg_match_all('/\A[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\z/',$email)) {
      echo '>正規表現に一致しました。';
    } else {
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <h2>
    <?php
    $mobile = '090-0000-0000';

    echo '検索対象:'.$mobile;
    ?>
  </h2>
  <p>
    <?php
    echo '携帯電話番号のフォーマットと完全に一致しているかどうかを正規表現で検索します。<br>';

    if(preg_match_all('/\A0[7-9]0-[0-9]{4}-[0-9]{4}\z/',$mobile)) {
      echo '>正規表現に一致しました。';
    } else {
      echo '>正規表現に一致しませんでした。';
   }
    
    ?>
  </p>
</body>
</html>