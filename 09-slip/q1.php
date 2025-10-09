<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="#">
        Enter your choice:<input type="text" name="ch"><br>
        1)Insert element in stack<br>
        2)Delete element from stack<br>
        3)Display contents of stack<br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$ch=$_POST['ch'];
$a=array(10,20,30,40);
switch($ch)
{
    case 1:array_push($a,50);
            print_r($a);
        break;
    case 2:array_pop($a);
            print_r($a);
        break;
    case 3:$arr=print_r($a);
        break;
}
?>
