<html>
    <body>
        <form method="post" action="#">
        Enter your choice:<input type="text" name="t1"><br>
        1)Reverse <br>
        2)Traverse<br>
        3)Convert into variable<br>
        4)Display<br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$ch=$_POST['t1'];
$a=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
switch($ch)
{
    case 1:$rev=array_flip($a);
            print_r($rev);
        break;
    case 2: foreach ($a as $x)  
{ 
echo "$x <br>"; 
}
        break;
    case 3:extract($a);
        echo $Sagar .":".$Vicky.":". $Leena.":". $Ramesh;
        break;
    case 4:$d=print_r($a);
        break;
}
?>

