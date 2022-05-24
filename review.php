<!-- ❼ show.phpにレビューを載せるクラス -->
<?php
class Review{
    //❼-1 プロパティ
    private $menuName; //どのメニューのレビューか
    private $body; //レビュー内容

    //❾-3 どのユーザーのレビューか
    private $userName;

    //❼-2 コンストラクト → ❾-4 $userName追加
    public function __construct($menuName,$userName,$body){

    //親クラス（Menuクラス）のプロパティの重複を避ける
    //　→ 「parent::メソッド名」で重複をまとめられる
    // parent::__construct($name, $price ,$image);

      $this->menuName  = $menuName;
      $this->userName = $userName; //→プロパティを追加したので、data.phpの個別情報も変わる(❾-5)
      $this->body = $body;
    }

    //❼-3 ゲッター・セッター　→　data.phpの❼-4へ
    public function getMenuName() {
        return $this->menuName;
    }
    
    public function getBody() {
        return $this->body;
    }

    //❾-6 getUserメソッド=userNameプロパティの値を利用して、名前が一致するUserインスタンスを取得する
     //次はshow.phpで表示させる(❾-7)
    public function getUser($users){
        //「review.phpのuserName」が「user.php」と一致するまで配列$usersの中身を繰り返す
        foreach($users as $user){
            if($user->getName() == $this->userName){
                return $user;
            }
        }

    }
}
?>