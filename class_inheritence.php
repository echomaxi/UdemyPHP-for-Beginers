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

class Plane extends Car {
}

$jet = new Plane();
echo $jet->wheel;
echo "<br>";

if(class_exists("Plane")) {
    echo "it does";
} else {
    echo "no, it doesn't";
}
?>