<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- including a html file -->
    <?php include "header.html";?> 
    <p>hey I'm in the middle</p>
    <?php 
        $title = "A php title";
        $author = "multy";
        include "header.php";
    ?>
    <?php include "footer.html"; ?>
</body>
</html>