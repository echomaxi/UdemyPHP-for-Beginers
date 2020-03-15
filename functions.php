<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    function init(){
        say_Something();
        echo "<br>";
        caclulate();
    }
    
    function say_Something(){
        echo "Hello Student, do you like the class? Yes?";
    }
    
    function caclulate(){
        echo 456 + 345;
    }
    
    init();
    ?>
</body>

</html>
