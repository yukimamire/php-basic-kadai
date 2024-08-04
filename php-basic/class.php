<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    class Product{
      public $name;

    public function set_name(string $name) {
       $this->name = $name;
    }
    public function show_name() {
      echo $this->name .'<br>';
    }
  }
  $coffee = new Product();

  $coffee->set_name('コーヒー');
  $coffee->show_name();

   $shampoo = new Product();
  //  メソッドにアクセスして実行
  $shampoo->name = 'シャンプー';
  echo $shampoo->name;
?>
  </p>

  <p>
    <?php
      class User {
        // プロパティを決める
         private $name;
         private $age;
         private $gender;
    
    // コンストラクーの定義
    public function __construct(string $name,int $age,string $gender) {
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
    }
   }
  //  インスタンス化する
  $user = new User('侍太郎',36,'男性');
  print_r($user);
     
    
    ?>
  </p>
</body>
</html>