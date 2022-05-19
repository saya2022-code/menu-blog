<?php
//クラスとインスタンスをここで設定した後、見やすくするため別のファイルに分ける。

?>

<!-- ここからHTML(練習) -->

<!-- ⑥ php内で設定したプロパティ名などを使い、個別の情報を出力 -->
  <!-- 1行で済む場合、「;」を省略できる -->
<!-- <p><?php echo $curry->name ?></p> 
<p><?php echo $pasta->name ?></p>  -->


<!-- ここからHTML(本番) -->

<!-- ⑩ インスタンスが定義されているdata.phpを読み込む -->
<?php require_once('data.php'); ?>

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
      <div class="menu-item">
      <!-- <img>タグのsrc属性に、$menuのimageプロパティを表示 -->
        <!-- $menuには「$juice,$coffee,$curry,$pasta」がそれぞれ入る -->
        <img src="<?php echo $menu->image?>">

        <h3 class="menu-item-name"><?php echo $menu->name?></h3>

      <!-- <p>タグの中に、$menuのpriceプロパティ(税抜き価格)を表示してください -->
        <p class="price">¥<?php echo $menu->price?>（税抜き）</p>

      <!-- $menuのgetTaxIncludedPriceメソッドの戻り値で「税込価格」を表示 -->
        <p class="price">¥<?php echo $menu->getTaxIncludedPrice()?>（税込）</p>
      </div>
    <?php endforeach?>

  </div>
  </div>
</body>
</html>
