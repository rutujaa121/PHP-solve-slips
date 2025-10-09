<html>
    <body>
        <form method="post" action="#">
        Enter your choice:<input type="text" name="ch"><br>
        1)Split into chunks<br>
        2)Sort by value<br>
        3)Filter even elements<br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$ch=$_POST['ch'];
  $a=array("Sophia"=>"30","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
  switch($ch)
  {
    case 1:$b=array_chunk($a,2);
            print_r($b);
        break;
    case 2:asort($a);
            print_r($a);
        break;
    case 3:function even($var) 
{ 
return($var%2==0); 
} 
print_r(array_filter($a,"even"));
        break;
  }
?>
