<?php 
class User{
    //❾-1プロパティ→コンストラクタ→ゲッター・セッター
     //上記が終わったら、data.phpで個別の情報をセットする(❾-2)
    private $name;
    private $gender;

    public function __construct($name,$gender){

        $this->name = $name;
        $this->gender = $gender;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getGender(){
        return $this->gender;
    }
}  
?>