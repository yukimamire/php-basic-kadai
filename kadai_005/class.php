<?php
class Food {
   public  $name;
   public  $price;

 public function __construct($name,$price) {
  $this->name = $name;
  $this->price = $price;
 }
 public function show_price() {
  $this->price;
 }
}
$food = new Food('potato',250);
$food ->show_price(250);
print_r($food);

?>
<p>

<?php
 class Animal {
  public $name;
  public $height;
  public $weight;

public function __construct($name,$height,$weight) {
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight;
}
public function show_height() {
  $this->height;
}
 }
$animal = new Animal('dog',60,5000);
$animal->show_height('60');
print_r($animal);
 ?>
 </p>