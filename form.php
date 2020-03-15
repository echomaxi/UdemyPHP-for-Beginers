 <?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
//        echo $username;
//        echo "<br>";
//        echo $password;
        $name = array("Max", "Diana", "boy", "girl");
        $minimum = 2;
        $maximum = 10;
        if(strlen($username) < $minimum){
            echo "Username has to be longer then filve";
            echo "<br>";
        }
        if(strlen($username) > $maximum){
            echo " Username can not be longer then 10";
            echo "<br>";
        }
        if(!in_array($username, $name)){
            echo "sorry, you are not allowed!";
            echo "<br>";
        } else {
            echo "welcome";
            echo "<br>";
        }
    }
    ?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <title>Document</title>
 </head>

 <body>

     <form action="form.php" method="post">
         <input type="text" name="username" placeholder="name">
         <br>
         <br>
         <input type="password" name="password" placeholder="password">
         <br>
         <br>
         <input type="submit" name="submit">
     </form>



 </body>

 </html>
