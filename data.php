<!-- データ(インスタンス)の定義用 -->
<?php 
//⑨ クラス定義用のファイル、menu.phpを読み込む
  //food,drinkクラスの継承によりこの読み込みが不要になる
// require_once('menu.php');

//代わりにdrink.phpとfood.phpを読み込む
require_once('drink.php');
require_once('food.php');
require_once('review.php');

//②クラスのインスタンス(カレーやパスタなどの単品)を生成
 //クラスの外で作成する
 //$変数名 = new クラス名(引数)　→クラス名(Menu)を指定するので、クラスの外で作成出来る。

    //⑤-2 コンストラクタに渡す引数(個別の情報)を入れる
     $juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png','アイス');
     $coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png','ホット');
     $curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png',3);
     $pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png',1);
                       
    //⑦ ⑤-2のインスタンスを配列にまとめる
    //$配列名 = array( $変数名1,$変数名2..);
    $menus = array($juice, $coffee, $curry, $pasta);


    //❼-4 review.phpのコンストラクタに渡す引数(個別の情報)を入れる
    $review1 = new Review( $juice->getName(),'果肉たっぷりのオレンジジュースです！');    
    $review2 = new Review($curry->getName(),'具がゴロゴロしていてとてもおいしいです');

    //❼-5 reviewのインスタンスを配列にまとめる → show.phpの❼-6へ
    $reviews = array($review1,$review2);
?>