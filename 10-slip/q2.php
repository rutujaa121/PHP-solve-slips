<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="q2.php">
            Enter first number:<input type="text" name="t1"><br>
            Enter second number:<input type="text" name="t2"><br>
            Enter your choice:<input type="text" name="ch"><br>
            1)Mod of numbers<br>
            2)Find power<br>
            3)Sum<br>
            4)Factorial<br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$ch=$_POST['ch'];
switch($ch)
{
    case 1:mod($a,$b);
        break;
    case 2:power($a,$b);
        break;
    case 3:sum($a,$b);
        break;
    case 4:fact($a,$b);
        break;
}
function mod($a,$b)
{
    $c=$a%$b;
    echo"Mod is:".$c;
}
function power($a,$b)
{
    $p=1;
    while($b>0)
    {
        $p=$p*$a;
        $b--;
    }
    echo "Power is:".$p;
}
function sum($a,$b)
{
    $sum=0;
    while($a>0)
    {
        $sum=$sum+$a;
        $a--;
    }
    echo "Sum is:".$sum;
}
function fact($a,$b)
{
    $fact=1;
    while($a>0)
    {
        $fact=$fact*$a;
        $a--;
    }
    echo "Factorial is:".$fact;
}
?>

