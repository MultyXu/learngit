<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- post is more secure, not showing in url -->
    <!-- post is more preferred to use post -->
    <form action="post.php" method="post"> 
        password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>
    
    <?php
        echo $_POST["password"];
    ?>
</body>
</html>