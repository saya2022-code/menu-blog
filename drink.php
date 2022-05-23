<?php 
//menu.phpを継承したクラス
//継承したいクラスを読み込む
require_once('menu.php');

//class 子クラス名 extends 親クラス名
class Drink extends Menu{

   //ホットかアイスかのタイプに分けるプロパティ
   private $type;

   // Drinkクラスで親クラス（Menuクラス）のコンストラクタをオーバーライド
    //、親クラス（Menu）のコンストラクタの中身をDrinkクラスにコピー
     //引数に$typeを追加する
  public function __construct($name, $price, $image, $type) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
    
    // typeプロパティに$typeを代入してください
    $this->type = $type;
    
  }
   public function getType(){
       return $this->type;
   }

   public function setType($type){
    $this->type = $type;
}
}
?>