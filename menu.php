<!-- クラスの定義用 -->

<?php 
// ①Menuクラス(設計図)を定義
class Menu{
   
    // プロパティのアクセス権をprotectedに変更
    protected static $count = 0; 
    
          protected $name;
          protected $price;
          protected $image;

           //数をカウントしていくので、初期値をセットする
          private $orderCount = 0;
            
            //⑤-3　コンストラクタの引数に個別の情報(⑤-2)が入る。
            public function __construct($name,$price,$image) {
              // nameプロパティに引数の$nameを代入してください
              $this->name = $name;
              $this->price = $price;
              $this->image = $image;
              $this->$orderCount = $orderCount;

              //インスタンスを＋1ずつカウント
              self::$count ++;
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

    //getTotalPrice=小計金額(税金価格*注文数)
    public function getTotalPrice(){

      //$this＝foreachよりプロパティが1つずつ入る変数
      return $this->getTaxIncludedPrice() * $this->orderCount;
    }

  //❽ getReviews=メニュー名に応じたレビューを表示させる(❼は全てのレビューが出てしまう)
    //メニューのnameプロパティとレビューのmenuNameプロパティを用いる
    public function getReviews($reviews) {
    //❽-1　空の配列（$reviewsForMenu）を用意
    $reviewsForMenu = array();

    //❽-2 $reviewのmenuNameプロパティと、インスタンス自身($this)のnameプロパティを比較する
    foreach($reviews as $review){
      if($review->getMenuName() == $this->name) { //menuNameプロパティと、インスタンスのnameプロパティが一致
        //$reviewsForMenuに$reviewを追加する
        $reviewsForMenu[] = $review;
      }
    }
    //❽-3 $reviewが入った$reviewsForMenuを戻り値とする。→ show.phpで呼び出し、表示させる(❽-4)
    return $reviewsForMenu;
    }

    public static function getCount(){
      //クラスプロパティなので、seld::$プロパティ名
      return self::$count;
    }

    //❹ findByName＝show.phpにインスタンスを表示する
    public static function findByName($menus,$name){
      //data.phpの$menusを使い、配列の$nameが$_GET['name'];と一致するまで繰り返す。
      foreach($menus as $menu){
        if($menu->name == $name) { //配列の$nameが$_GET['name'];と一致
        return $menu; //一致した$nameのインスタンスを戻り値にする → show.phpで表示するため、menu.phpを読み込ませる
      }
    }
   }



  }
 

  
?>