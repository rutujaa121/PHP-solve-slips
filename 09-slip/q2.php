<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="q2.php" method="POST">
        Enter a string:<input type="text" name="str"><br><br>
    Select a seperator:<select name="sep">
        <option value="#">#</option>
        <option value="|">|</option>
        <option value="%">%</option>
        <option value="@">@</option>
        <option value="!">!</option>
        <option value=",">,</option>
    </select><br><br>
    <input type="radio" name="r" value="1">Split string into seperate words using the given separator.<br>
    <input type="radio" name="r" value="2">Replace all occurance of seperator in the given string with some other seperator.<br>
    <input type="radio" name="r" value="3">Find the last word in the given string.<br>
    <input type="submit" value="submit">
</form>    
</body>
</html>
<?php
$string =$_POST['str'];
$sep=$_POST['sep'];
$ch=$_POST['r'];
switch($ch)
{
    case 1:$words=explode($sep,$string);
            print_r($words);
        break;
    case 2:$new="*";
        $string=str_replace($sep,$new,$string);
        echo $string;
        break;
    case 3:$last=strrchr($string,$sep);
            echo $last;
        break;
}
?>

