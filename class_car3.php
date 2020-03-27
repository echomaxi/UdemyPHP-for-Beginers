<?php
class Car {
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 4;
    function MoveWheels() {
        $this->wheels = 10;
    }
    function CreateDoors(){
        $this->door = 6;
    }
}
$bmw = new Car();
$truck = new Car();
echo $bmw->wheel . "<br>";
echo $truck->wheel = 10 . "<br>";
$truck->CreateDoors();
echo $truck->door;
?>