<?php
class AirConditioner {
    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小値に戻る関数を定義すること　(1->2->3->4->5->1)の順で変化する
    */
    private $power;
    
    /*
    コンストラクタ
    */
    function __construct($temperature,$power) {
        $this->mode = "冷房";
        $this->temperature = $temperature;
        $this->power = $power;
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
    }
    
    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
    
    function cool() {
        $this->mode = "冷房";
    }
    
    function hot() {
        $this->mode = "暖房";
    }
    
    function dry() {
        $this->mode = "除湿";
    }
    
    function temperatureUP() {
        if($this->temperature == 30){
            return;
        }
        $this->temperature++;
    }
    
    function temperatureDOWN() {
        if($this->temperature == 18){
            return;
        }
        $this->temperature--;
    }
    
    function powerUP(){
        if($this->power == 5){
            $this->power = 1;
            return;
        }
        $this->power++;
    }
    
}
?>