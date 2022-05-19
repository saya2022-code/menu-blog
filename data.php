<!-- データ(インスタンス)の定義用 -->
<?php 
//⑨ クラス定義用のファイル、menu.phpを読み込む
require_once('menu.php');

//②クラスのインスタンス(カレーやパスタなどの単品)を生成
 //クラスの外で作成する
 //$変数名 = new クラス名(引数)　→クラス名(Menu)を指定するので、クラスの外で作成出来る。
  // $curry = new Menu();
  // $pasta = new Menu();

    //⑤-2 コンストラクタに渡す引数(個別の情報)を入れる
    $juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
    $coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
    $curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
    $pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');
        
    
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