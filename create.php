<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>

    <title>Document</title>
</head>
<body>
<div class="create-area">
    <h1>口コミ投稿フォーム</h1>
    <form action="/create" method="post">
        <div class="a-section a-spacing-medium ryp__product-header">
            <h2 class="a-spacing-medium a-text-bold">
                <span data-hook="ryp-product-header-form-title">
                    <span>この商品をレビュー</span>
                </span>
            </h2>
        </div>
        <div class="a-spacing-small a-text-bold">
            <h2>総合評価</h2>
            <div class="a-section a-spacing-top-micro">
                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                    <!-- <img alt="商品レビューで1つ星を選択する" src=""> -->
                    ☆
                </button>
                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                    <!-- <img alt="商品レビューで1つ星を選択する" src=""> -->
                    ☆
                </button>
                <button type="button" class="ryp__star__button" data-hook="ryp-star">
                    <!-- <img alt="商品レビューで1つ星を選択する" src=""> -->
                    ☆
                </button>
            </div>
        </div>

        <h3>
            <label for="scarface-review-text-card-title">
                <span data-hook="ryp-card-header-title">
                    <span>レビューを追加</span>
                </span>
            </label>
        </h3>    
        <div data-hook="ryp-review-text-input" class="a-input-text-wrapper">
            <textarea placeholder="気に入ったこと/気に入らなかったことは何ですか？この製品をどのように使いましたか？" id="scarface-review-text-card-title" style="height: 130px;">
        </textarea>
        </div>    
        <input type="submit" value="作成する">
    </form>
</div>
    <div class="order-button">
    <a href="index.php">キャンセル</a>
    </div>
</body>
</html>