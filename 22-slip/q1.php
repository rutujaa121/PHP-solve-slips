 <?php
 $file=fopen("file.txt","r");
 $f="file.txt";
 while(!feof($file))
 {
    $read=fgets($file);
    echo $read;
 }
    $size=filesize($f);
    echo "File Size:".$size;
 ?>
