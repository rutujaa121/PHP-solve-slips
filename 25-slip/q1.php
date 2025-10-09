<?php
$db=new mysqli("localhost","root","","tybcs")or die("not");
echo "connected";
$sql="insert into college(cno,cname)values(101,'bhavna'),(102,'rutu')";
if($db->query($sql)===TRUE)
{
    echo "value inserted";
}
else{
    echo "error";
}
$db->close();
?>