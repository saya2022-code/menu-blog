<!-- データ(インスタンス)の定義用 -->
<?php 
//⑨ クラス定義用のファイル、menu.phpを読み込む
require_once('menu.php');

//②クラスのインスタンス(カレーやパスタなどの単品)を生成
 //クラスの外で作成する
 //$変数名 = new クラス名(引数)　→クラス名(Menu)を指定するので、クラスの外で作成出来る。

    //⑤-2 コンストラクタに渡す引数(個別の情報)を入れる
    $juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
    $coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
    $curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
    $pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');
        
    //menu.phpで設定したセッターメソッドの引数に、個別の情報を入れる 
      //→ menu.phpの引数$orderCountに入る
    
    //⑦ ⑤-2のインスタンスを配列にまとめる
    //$配列名 = array( $変数名1,$変数名2..);
    $menus = array(
      $juice,$coffee,$curry,$pasta
    );


?>