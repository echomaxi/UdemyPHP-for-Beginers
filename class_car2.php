<?php
class Car {
    function MoveWheels() {
        echo "Wheels move";
    }
}
if(method_exists("Car", "MoveWheels")) {
    echo "The Mothod Exist!";
} else {
    echo "No, it is not exist";
}
?>