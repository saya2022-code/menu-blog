<!-- データ(インスタンス)の定義用 -->
<?php 
//⑨ クラス定義用のファイル、menu.phpを読み込む
  //food,drinkクラスの継承によりこの読み込みが不要になる
// require_once('menu.php');

//代わりにdrink.phpとfood.phpを読み込む
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

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

    
    //Userクラスのインスタンス = ❾-5の引数の前にインスタンスを生成しないとエラーになる。(引数に$userがいるから)
    //❾-2 user.phpのコンストラクタに渡す引数(個別の情報)を入れる
     //レビューと紐づけるため、review.phpへ(❾-3)
     $user1 = new User('suzuki','male');
     $user2 = new User('tanaka','female');
 
     $users = array($user1,$user2);
 

    //❼-4 review.phpのコンストラクタに渡す引数(個別の情報)を入れる
      //❾-5　プロパティ追加より、❼-4の内容を変更
       //次はreview.phpでReviewインスタンスがUserインスタンスを取得させる(❾-6)
      $review1 = new Review($juice->getName(), $user1->getName(), '果肉たっぷりのオレンジジュースです！');
      $review2 = new Review($curry->getName(), $user1->getName(), '具がゴロゴロしていてとてもおいしいです');
      $review3 = new Review($coffee->getName(), $user1->getName(), '香りがいいです');
      $review4 = new Review($pasta->getName(), $user1->getName(), 'ソースが絶品です。また食べたい。');
      $review5 = new Review($juice->getName(), $user2->getName(), '普通のジュース');
      $review6 = new Review($curry->getName(), $user2->getName(), '値段の割においしいカレーだと思いました');
      $review7 = new Review($coffee->getName(), $user2->getName(), '苦味がちょうどよくて、おすすめです');
      $review8 = new Review($pasta->getName(), $user2->getName(), '具材にこだわりを感じました。');
          
    //❼-5 reviewのインスタンスを配列にまとめる → show.phpの❼-6へ
    $reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);
    

?>