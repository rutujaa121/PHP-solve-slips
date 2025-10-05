<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter your choice:<input type="text" name="str"><br>
        1.assending sort bt value<br>
         2.assending sort bt key<br>
          3.desending sort bt value<br>
           4.desending sort bt key<br>
        <input type="submit" value="submit"><br>
</body>
</html>

<?php
$a=$_POST["str"];
$c=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
switch($a)
{
    case 1:$b=asort($c);
    print_r($c);
    break;

    case 2:$b=ksort($c);
    print_r($c);
    break;

    case 3:$b=arsort($c);
    print_r($c);
    break;

    case 4:$b=krsort($c);
    print_r($c);
    break;
}


?>