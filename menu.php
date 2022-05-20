<!-- クラスの定義用 -->

<?php 
// ①Menuクラス(設計図)を定義
class Menu{

         //⑪ プロパティを追加
          //プロパティのアクセス権をprivateに変える
          private $name;
          private $price;
          private $image;

           //数をカウントしていくので、初期値をセットする
          private $orderCount = 0;
            
            //⑤-3　コンストラクタの引数に個別の情報(⑤-2)が入る。
            public function __construct($name,$price,$image) {
              // nameプロパティに引数の$nameを代入してください
              $this->name = $name;
              $this->price = $price;
              $this->image = $image;
              $this->$orderCount = $orderCount;
              
            }
  
        //クラスの外からprivateプロパティへアクセスするため、「ゲッターメソッド」を用意
          //public function getメソッド名() { return ⑤-3の変数 }
          public function getName(){
            return $this->name;
          }

          public function getPrice(){
            return $this->price;
          }

          public function getImage(){
            return $this->image;
          }
          
          public function getOrderCount(){
            return $this->orderCount;
          }
          
          //値が変わるプロパティなので、セッターメソッドを定義 → 引数$orderCountには、data.phpの「セッターメソッドの引数」に個別の情報が入る
          public function setOrderCount($orderCount){
             $this->orderCount = $orderCount;
          }

    //getTaxIncludedPrice＝税金価格を表示するメソッド
    public function getTaxIncludedPrice(){
        //priceプロパティに1.08を掛けたものを、小数点以下を切り捨てて、それを戻り値とする
        //⑤-2より、priceプロパティ($this->price)には具体的な数値が入っている。

        return floor($this->price*1.08); //floorで小数点以下を切り捨てる
    }
  }
?>