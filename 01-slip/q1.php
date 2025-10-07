<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="POST">
        Enter the name of the student: <input type="text" name="s1"><br><br>

        Enter the name of the College: <input type="text" name="s2"><br><br>

        Enter your Greeting Message: <input type="text" name="s3"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $a = $_POST['s1'];
    $b = $_POST['s2'];
    $c = $_POST['s3'];

    function display($a, $b, $c)
    {
        if($c==null or $a==null or $b==null)
            echo "welcome";

        else
            echo $c." ".$a." from ".$b;
    }
    display($c, $a, $b)
?>