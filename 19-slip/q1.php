<?php
$a1=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow"); 
$a2=array("a"=>"purple","b"=>"orange"); 
array_splice($a1,0,3,$a2); 
print_r($a1);
?>
