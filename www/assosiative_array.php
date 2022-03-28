<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="assosiative_array.php" method="post">
        <p>Eneter name to get the grade</p>
        <input type="text" name="name"><br>
        <input type="submit">
    </form>

    <?php
        
        $grade = array("jim"=>"A+", "Pam"=>"B","Oscar"=>"C"); // associatve array, key and element 

        // if the value that called by post to get "name" is not blank, then echo the resutl
        // this prevents the browers to show the error message
        if (isset($_POST["name"])) {
            $student = $_POST["name"];
            echo $grade[$student]; // use key to get the element
        }

        // or you also can acces the key in order to modify the element 
    ?>
</body>
</html>