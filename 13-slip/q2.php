<html>
    <body>
        <form method="post" action="#">
            Enter a string:<input type="text" name="str1"><br>
            1)Select first five words<br>
            2)Convert to lowercase<br>
            3)Pad string with "*" from both sides<br>
            4)Remove leading whitespaces<br>
            5)Reverse string<br>
            Enter your choice<input type="text" name="ch">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php
$s1=$_POST['str1'];
$ch=$_POST['ch'];
switch($ch)
{
    case 1:$a=explode(" ",$s1);
            $words=implode(" ",array_slice($s1,0,5));
            print_r($words);
        break;
    case 2:$a=strtolower($s1);
            echo $a;
            $b=ucwords($s1);
            echo $a;
        break;
    case 3:$a=str_pad($s1,10,"*",STR_PAD_BOTH);
            echo $a;
        break;
    case 4:$a=trim($s1);
            echo $a;
        break;
    case 5:$a=strrev($s1);
            echo $a;
        break;
}
?>
