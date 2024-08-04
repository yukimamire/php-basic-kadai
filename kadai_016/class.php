<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    // フードクラス
      class Food {
        private $name;
        private $price;

      public function  __construct (string $name,int $price) {
          $this->name = $name;
          $this->price = $price;
      }
      
      public function show_price() {
         $this->price;
      }
      }
    // インスタンス
    $food = new Food ('potato',250);
    print_r($food);


      // アニマルクラス
      class Animal {
        private $name;
        private $height;
        private $weight;

      public function __construct (string $name,int $height,int $weight) {
         $this->name = $name;
         $this->height = $height;
         $this->weight = $weight;
      }
    
      public function show_height() {
          $this->height;
          
      }
    }
  //  インスタンス
      $animal = new Animal('dog',60,5000);
      print_r($animal);
    ?>
  </p>
</body>
</html>
