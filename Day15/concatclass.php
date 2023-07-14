<?php
class car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar=new car("black","volvo");
echo $myCar->message();
echo "<br>";
$myCar=new car("red","toyota");
echo $myCar->message();
?>