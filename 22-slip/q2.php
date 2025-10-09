<html>
    <body>
        <form method="post" action="#">
            Enter your choice:<input type="text" name="ch"><br>
            1)Split into chunks<br>
            2)Sort by value<br>
            3)Filter <br>
            4)Merge<br>
            5)Intersection of array<br>
            6)Union of arrays<br>
            7)Set difference of arrays<br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
$ch=$_POST['ch'];
$a=array("JAVA","55","OS","78","PYTHON","67","TCS","83","PHP","33");
$b=array("CN","66","PROJECT","88");
switch($ch)
{
    case 1:array_chunk($a,2);
            print_r($a);
        break;
    case 2:asort($a);
            print_r($a);
        break;
    case 3:function odd($var) 
{ 
return($var%2!=0); 
} 
print_r(array_filter($a,"odd"));
        break;
    case 4:$c=array_merge($a,$b);
        print_r($c);
        break;
    case 5:$c=array_intersect($a,$b);
            print_r($c);
        break;
    case 6:$union=$a+$b;
            print_r($union);
        break;
    case 7:$c=array_diff($a,$b);
        print_r($c);
        break;
}
?>
