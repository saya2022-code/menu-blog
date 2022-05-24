<!-- メニューの詳細（名前、値段など）を表示
   　 ＝　menu.phpのインスタンスを取得して表示する 
    　＝　それには、「❷の$_GET['name'];を用いてインスタンスを取り出す(menu.php,❹)」というクラスメソッドを定義する-->

<?php 
require_once('menu.php'); //❹の情報
require_once('data.php'); //$menusや戻り値の情報

 //❷ index.phpのクエリ情報(❶)を受け取る
  //変数名 = $_GET['キー名'];　で受け取り、変数に代入する
  $menuName = $_GET['name'];

 //❺ menu.phpのfindByNameメソッド(❹)を呼び出し、メソッドの戻り値を変数に代入する
   //＝配列$menusから特定のMenuインスタンスを取得
 $menu = Menu::findByName($menus,$menuName);

 //❽-4 $menuに対して、$reviewsを引数としてgetReviewsメソッドを呼び出し、メソッドの戻り値を変数に代入する
 $menuReviews = $menu->getReviews($reviews);
?>

<!--❸代入した変数を表示する -->
<!-- <h1><?php echo $menuName?>の詳細ページです</h1> -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper container" style="text-align: center;margin: 60px auto;">
    <!-- ❻「名前、ホット(アイス)、辛さ、値段」 を❺から取得して表示-->
    <img src="<?php echo $menu->getImage() ?>" class="menu-item-image" style="width: 100%;">
    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>

    <?php if ($menu instanceof Drink): ?>
      <p class="menu-item-type"><?php echo $menu->getType() ?></p>
    <?php else: ?>
      <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness' >
      <?php endfor ?>
    <?php endif ?>

    <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>(税込)</p>

    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review' style="width: 5%;">
          <h4>レビュー一覧</h4>
        </div>

        <!-- ❼-6 $reviewsの要素をそれぞれ表示　→ メニュー名に応じたレビューの表示(menu.php,❽) -->
        <!-- ❽-5　メニュー名に応じたレビューを表示(❼-6を書き換える) -->
        <?php foreach($menuReviews as $review): ?>
            <div class="review-list-item">
            <p><?php echo $review->getBody() ?></p>
          </div>
        <?php endforeach ?>

    <a href="index.php">← メニュー一覧へ</a>

  </div>
</body>
</html>