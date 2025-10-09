<html>
    <body>
        <form method="post" action="#">
            Enter file name:<input type="text" name="file"><br>
            Enter your choice:<input type="text" name="ch"><br>
            1)Display type of size<br>
            2)Last mdification time<br>
            3)Size of File<br>
            4)Delete File<br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$file=$_POST['file'];
$ch=$_POST['ch'];
switch($ch)
{
    case 1:echo"Type of file:".filetype($file);
        break;
    case 2:echo "Last Modification Time:".filemtime($file);
        break;
    case 3:echo "Size of file:".filesize($file);
        break;
    case 4:if(file_exists($file))
    {
        unlink($file);
        echo "File deleted successfully...";
    }
    else
    {
        echo "File not exist...";
    }
        break;
}
?>
