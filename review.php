<!-- ❼ show.phpにレビューを載せるクラス -->
<?php
class Review{
    //❼-1 プロパティ
    private $menuName; //どのメニューのレビューか
    private $body; //レビュー内容

    //❼-2 コンストラクト
    public function __construct($menuName,$body){

    //親クラス（Menuクラス）のプロパティの重複を避ける
    //　→ 「parent::メソッド名」で重複をまとめられる
    // parent::__construct($name, $price ,$image);

      $this->menuName  = $menuName;
      $this->body = $body;
    }

    //❼-3 ゲッター・セッター　→　data.phpの❼-4へ
    public function getMenuName() {
        return $this->menuName;
    }
    
    public function getBody() {
        return $this->body;
    }
}
?>