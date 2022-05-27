<link rel="stylesheet" type="text/css" href="header.css">
<header>
    <div class="header-nav">
      <a href="/">トップ</a>
      <p>ようこそ、<?php echo locals.username ?>さん</p>
      <ul>
        <li><a href="/signup">新規登録</a></li>
        <!-- locals.isLoggedInを用いて表示するリンクを切り替える-->
       <?php if(locals.isLoggedIn){ ?>
        <!-- locals.isLoggedIn=falseであり、それがtrueの場合 -->
        <li><a href="/logout">ログアウト</a></li> 
        <?php }else{ ?>
            <li><a href="/login">ログイン</a></li>
       <?php } ?>
      </ul>
    </div>
  </header>
