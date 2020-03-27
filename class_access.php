<?php
class Car {
    public $wheels = 4; // public = var - available in the program everywhere
    protected $hood = 1; // protected - available only within the class or it's subclass or to extanded class
    private $engine = 1; // private - available only within the class and can not be extanded
    var $door = 4;

    function MoveWheels() {
        echo $this->wheels = 10;
    }
}
$bmw = new Car();
?>