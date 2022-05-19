<?php
// ①Menuクラス(設計図)を定義
class Menu{

  //③全てのインスタンスに共通する「プロパティ」と「メソッド」を定義
   //プロパティ：料理名や値段などの情報、　メソッド：計算や名前取得などの処理
   //public $プロパティ名
     public $name;

      //⑤「コンストラクタ」というメソッドを定義
        //→ インスタンスを生成すると、自動でコンストラクタが呼ばれる＝処理やプロパティを追加できる
        //public function __construct(引数) { 処理内容 }
          // public function __construct(){  // __constructはアンダーバーが2つ
          //   echo '１つのメニューが作られました';
          //   echo '<br>'; //改行
          // }
          
          //⑤-3　コンストラクタの引数に個別の情報(⑤-2)が入る。
          public function __construct($name) {
            // nameプロパティに引数の$nameを代入してください
            $this->name = $name; //これで④の$curry->name = 'CURRY';を消しても表示される
            
          }

   //③-2 public function メソッド名() { 処理内容 }
    // public function hello(){
    //   echo '私はMenuクラスのインスタンスです';
    //   echo '<br>'; 

      //④-2 $thisを使って値を出力する
       //$this=メソッド内でインスタンスのプロパティやメソッドにアクセスする変数
    //   echo '私は'.$this->name.'です';
    //   echo '<br>'; 
    // }
}

//②クラスのインスタンス(カレーやパスタなどの単品)を生成
 //クラスの外で作成する
 //$変数名 = new クラス名(引数)　→クラス名(Menu)を指定するので、クラスの外で作成出来る。
  // $curry = new Menu();
  // $pasta = new Menu();

    //⑤-2 コンストラクタに渡す引数(個別の情報)を入れる
    $juice = new Menu('JUICE');
    $coffee = new Menu('COFFEE');
    $curry = new Menu('CURRY');
    $pasta = new Menu('PASTA');

    //⑦ ⑤-2のインスタンスを配列にまとめる
    //$配列名 = array( $変数名1,$変数名2..);
    $menus = array(
      $juice,$coffee,$curry,$pasta
    );

//④ ③で定義した共通プロパティなどに「個別の情報」をセットする
 //インスタンス->プロパティ名 = '個別の情報'
  //この時のプロパティ名は＄がいらない。インスタンス名とかぶるから。
  // $curry->name = 'CURRY'; //⑤-3のコンストラクタや$thisが設定されていれば、これは消して良い。
  // $pasta->name = 'PASTA';

  //echoで④が出力できるか確認する→成功
    // echo $curry->name; //⑤-3が出力 → ⑥のHTMLより、これもあとでいらなくなる。
    // echo '<br>'; //改行
    // echo $pasta->name;
    // echo '<br>'; //改行
    // echo $curry->hello(); //hello()を呼び出しているインスタンス($curry)が$thisに入る(④-2)
    // echo $pasta->hello(); //hello()を呼び出しているインスタンス($pasta)が$thisに入る(④-2)
?>

<!-- ここからHTML(練習) -->

<!-- ⑥ php内で設定したプロパティ名などを使い、個別の情報を出力 -->
  <!-- 1行で済む場合、「;」を省略できる -->
<!-- <p><?php echo $curry->name ?></p> 
<p><?php echo $pasta->name ?></p>  -->


<!-- ここからHTML(本番) -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">

    <!-- ⑧foreach文(endforeach)で配列$menuの要素を出力 -->
    <!-- 配列$menusの要素を変数$menuとするforeach文 -->
    <?php foreach($menus as $menu):?>
      <h3><?php echo $menu->name?></h3>
      <?php endforeach?>

  </div>
  </div>
</body>
</html>
