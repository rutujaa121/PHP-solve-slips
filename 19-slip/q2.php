<html>
    <body>
        <form method="post" action="#">
        Enter first string:<input type="text" name="s1"><br>
        Enter second string:<input type="text" name="s2"><br>
        Enter position:<input type="text" name="s3"><br>
        Enter no of characters:<input type="text" name="s4"><br>
        <input type="radio" name="r" value="1">Delete a small part<br>
        <input type="radio" name="r" value="2">Insert small string<br>
        <input type="radio" name="r" value="3">Replace some characters<br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$pos=$_POST['s3'];
$char=$_POST['s4'];
$ch=$_POST['r'];
switch($ch)
{
    case 1:$str=substr_replace($s1,$s2,$pos,$char);
            echo $str;
        break;
    case 2:$str=substr_replace($s1,$s2,$pos,0);
            echo $str;
        break;
    case 3:$str=substr_replace($s1,$s2,$pos,$char);
        echo $str;
        break;
}
?>
