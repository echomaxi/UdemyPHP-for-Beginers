<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    function greeting($message){
        echo  $message  .  " Max"  .  "?";
        echo "<br>";
    }
    greeting("How are you");
    
    function addNumbers($number1, $number2){
        $sum =  $number1 + $number2;
        echo $sum;
    }
    
    addNumbers(48,52);
?>
</body>

</html>
