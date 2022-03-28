<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- create a html form to get user input -->
    <!-- this stores the parameter in the url, get method store it in url  -->
    <form action="form.php" method="get"> 
        Name: <input type="text" name="name"> <br>
        <input type="submit">
    </form>
    <br><br>

    <!-- php language to output the name that gets by the form -->
    <?php
        $name = "";
        echo $_GET["name"]; 
    ?>
</body>
</html>