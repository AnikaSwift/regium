<?php
class  father{
    public $name;
    public $pants;
    public $heir;
    public $age = 'father is 35 years old';
    public $a = "<img src ='img/elvis.png' width='300px' height='300px'>";
    public function movements(){
        echo $this->name.' dansing disco in'.' '. $this->pants.' with heir style' .' '
            . $this->heir ."</br>".$this->a . "<br>" ;
    }
}
$father = new father();
$father->name = 'batya';
$father->pants = 'flared trousers';
$father->heir = 'Elvis';
$father->movements();
class sun extends father{
}
$sun = new sun;
$sun->pants = 'shorts';
$sun->heir = 'boks';
$sun->name = 'Petruha';
$sun->a = "<img src='img/sun.png' width='300px' height='300px'>";
$sun->movements();
