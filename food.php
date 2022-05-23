<?php 
// menu.phpを読み込んでください
require_once('menu.php');

// Menuクラスを継承したFoodクラスを作成してください
class Food extends Menu{
    private $spiciness;

    public function __construct($name, $price, $image, $spiciness){
        parent::__construct($name, $price ,$image);
        $this->spiciness = $spiciness;
    }

    public function getSpiciness() {
        return $this->spiciness;
      }
      
}

?>