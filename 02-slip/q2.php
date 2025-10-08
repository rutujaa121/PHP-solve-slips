<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="q2.php" method="POST">
        Enter First String <input type="text" name="str1"><br><br>
        Enter Second String <input type="text" name="str2"><br><br>

        Enter Position <input type="text" name="pos"><br><br>
        Enter no. of Characters <input type="text" name="num"><br><br>

        <input type="radio" name="option" value="1"> Delete a small part <br>
        <input type="radio" name="option" value="2"> Insert the small string <br>
        <input type="radio" name="option" value="3"> Replace some characters <br>
        <input type="radio" name="option" value="4"> Replace all the characters <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$a = $_POST['str1'];
$b = $_POST['str2'];
$pos = $_POST['pos'];
$num = $_POST['num'];
$ch = $_POST['option'];

switch ($ch) {
    case 1:
        $pos = substr_replace($a, $b, $pos, $num);
        if ($pos != 0)
            echo "stirng are deleted";
        else
            echo "string are not deleted";
        break;

    case 2:
        $str = substr_replace($a, $b, $pos, 0);
        echo "After Inserting the small string : " . $str;
        break;

    case 3:
        $str = substr_replace($a, $b, $pos, $num);
        echo "After Replacing some characters : " . $str;
        break;

    case 4:
        $str = str_replace($a, $b, $a);
        echo "After Replacing all the characters : " . $str;
        break;
}
?>