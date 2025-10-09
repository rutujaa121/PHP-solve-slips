<html>
    <body>
        <form method="post" action="#">
        Enter student name:<input type="text" name="t1"><br>
        Enter college name:<input type="text" name="t2"><br>
        Enter greeting message:<input type="text" name="t3"><br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$a1=$_POST['t1'];
$a2=$_POST['t2'];
$a3=$_POST['t3'];
function display($a3,$a1,$a2)
{
    if(($a3 or $a1 or $a2) ==null)
    {
        echo "Welcome";
    }
    else
    {
        echo $a3." ".$a1." from ".$a2;
    }
}
display($a3,$a1,$a2);
?>

