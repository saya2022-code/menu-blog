<!-- クラスの定義用 -->

<?php 
// ①Menuクラス(設計図)を定義
class Menu{

    //③全てのインスタンスに共通する「プロパティ」と「メソッド」を定義
     //プロパティ：料理名や値段などの情報、　メソッド：計算や名前取得などの処理
     //public $プロパティ名
       //public $name;

         //⑪ プロパティを追加
           public $name;
           public $price;
           public $image;
  
        //⑤「コンストラクタ」というメソッドを定義
          //→ インスタンスを生成すると、自動でコンストラクタが呼ばれる＝処理やプロパティを追加できる
          //public function __construct(引数) { 処理内容 }
            // public function __construct(){  // __constructはアンダーバーが2つ
            //   echo '１つのメニューが作られました';
            //   echo '<br>'; //改行
            // }
            
            //⑤-3　コンストラクタの引数に個別の情報(⑤-2)が入る。
            public function __construct($name,$price,$image) {
              // nameプロパティに引数の$nameを代入してください
              $this->name = $name;
              $this->price = $price;
              $this->image = $image;
              
            }
  
     //③-2 public function メソッド名() { 処理内容 }
     
    //   public function hello(){
      //   echo '私はMenuクラスのインスタンスです';
      //   echo '<br>'; 
  
        //④-2 $thisを使って値を出力する
         //$this=メソッド内でインスタンスのプロパティやメソッドにアクセスする変数
        // echo '私は'.$this->name.'です';
        // echo '<br>'; 
    //   }

    //getTaxIncludedPrice＝税金価格を表示するメソッド
    public function getTaxIncludedPrice(){
        //priceプロパティに1.08を掛けたものを、小数点以下を切り捨てて、それを戻り値とする
        //⑤-2より、priceプロパティ($this->price)には具体的な数値が入っている。

        return floor($this->price*1.08); //floorで小数点以下を切り捨てる
    }
  }
?>