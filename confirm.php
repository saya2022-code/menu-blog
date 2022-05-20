<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>

    <!-- 合計金額の初期値をセット＝小計を足すだけなので、プロパティから設定しなくて良い -->
    <?php $totalPayment = 0;?>
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        // $menuに対して、$orderCountを引数としてsetOrderCountメソッドを呼び出してください
        $menu->setOrderCount($orderCount);
   
        // $totalPaymentに、$menuのgetTotalPriceメソッドで得た値を足してください
        $totalPayment += $menu->getTotalPrice();
      ?>

      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <!-- $menuに対してgetTotalPriceメソッドを呼び出して、金額を表示してください -->
      <p class="order-price"><?php echo $menu->getTotalPrice()?>円</p>
    <?php endforeach ?>

    <!-- 合計金額を表示する -->
    <h3>合計金額：<?php echo $totalPayment ?>円</h3>
  </div>
</body>
</html>