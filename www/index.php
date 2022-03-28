 <!-- 
    in order to excute the file, you have to put this file under the c:/user/gaming 3i/[some dir]. 
    And you have to start a local php server and type the directory into the http request.

-->



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
        $name = "Multy"; // create a variable

        echo ("<h1>Hi I'm $name.</h1>");
        echo "<hr>";

        $name = "Jack"; // change variable
        echo "<p>And now my name is $name.</p>";

    ?>

    <h1>Now, it is a new part</h1>
    <hr>
    
    <?php
        // Here we get some data typ here
        $isMale = false; // boolean is not printed
        $int = 10; // int
        $float = 10.3; // doubel or float
        echo "Multy is femal is $isMale <br>";
    ?>

    <?php // modify strings with functions
        $phrase = "This is a String";
        echo $phrase;
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo $phrase[2];
        echo "<br>";
        echo str_replace("is", "is not", $phrase); // it chages all "is" in the phrase to "is not"
        echo "<br>";
        echo substr($phrase, 8, 4); // grab the string start at position 8, with 4 characters
    ?>

    <form action="index.php" method="get">
        Name:<input type="text" name="enterName">
        <input type="submit">
    </form>

    <?php // get user input, html form is a 中间人 of php and html
        echo $_GET["enterName"]
    ?>

    <div>
        <!-- basic calculator -->
        <hr>
        <h1>A calculator</h1>

        <form action="index.php" method="get">
            <!-- step allows us to enter the number with 0.1 accuracy  -->
            <input type="number" step="0.1" name="num1"> 
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>

        Answer: 
        <?php
            echo $_GET["num1"] + $_GET["num2"];
        ?>
    </div>
</body>
</html>