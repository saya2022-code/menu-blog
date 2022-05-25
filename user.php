<?php 
class User{
     //➓-1　$nameが同じでも違うユーザと認識するため、idを追加
    private $id;
    
        //❾-1プロパティ→コンストラクタ→ゲッター・セッター
        //上記が終わったら、data.phpで個別の情報をセットする(❾-2)
        private $name;
        private $gender;

     //➓-1 idをautoIncrementにするため、「$count」というインスタンスを数えるクラスプロパティも追加
     private static $count = 0;

    public function __construct($name,$gender){

        $this->name = $name;
        $this->gender = $gender;

     //➓-2 $countを++1させ、その値を$idに代入
      //クラスプロパティなので、self::プロパティ名。更に$countを代入した値を使うので、$idを引数に追加しなくて良い
        self::$count++;
        $this->id = self::$count++;
    }

    //➓-3 $idのゲッターメソッドを定義。idがshow.phpで表示するか確認してみる(➓-4)
    public  function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getGender(){
        return $this->gender;
    }
}  
?>