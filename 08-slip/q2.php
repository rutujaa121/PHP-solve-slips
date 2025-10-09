<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
        <form method="post" action="#">
        Enter first string:<input type="text" name="str1"><br>
        Enter second string:<input type="text" name="str2"><br>
        Enter your choice:<input type="text" name="ch"><br>
        1)Small string appear at start<br>
        2)Position of small string<br>
        3)Compare both strings<br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$s1=$_POST['str1'];
$s2=$_POST['str2'];
$ch=$_POST['ch'];
switch($ch)
{
    case 1:$pos=strpos($s1,$s2);
    if($pos!=0)
        echo "String2 not present at start of string1";
    else
        echo "String2 present at start of string1";
        break;
    case 2:$pos=strpos($s1,$s2);
            echo $pos;
        break;
    case 3:$pos=strcasecmp($s1,$s2);
            echo $pos;
        break;

}
?>
