<?php
$f1=fopen("file1.txt","r");
$f2=fopen("file2.txt","w");
while(!feof($f1))
{
    $read=fgets($f1);
}
fputs($f2,$read,10);
echo "File copied..";
?>
