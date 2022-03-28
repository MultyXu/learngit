<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $friends = array("Multy", "Max", "David"); // create an array call friends
        // echo $friends; doesn't work in php 8, in php 7 it print out the type
        echo $friends[0];

        $friends[0] = "good";
        echo $friends[0];
        
        $friends[4] = "hidh"; // add a friend to the thing 

        echo count($friends); // give the number of element 
    ?>

    
</body>
</html>