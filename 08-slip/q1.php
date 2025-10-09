<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        Enter email:<input type="text" name="email">     
        <input type="submit" value="submit">                                                                                                                                                                                                                                                                                               
        </form>
    </body>
</html>

<?php
$ch=$_POST['email'];
if(preg_match("^[-a-z-0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$^",$ch))
{
    echo "Email is valid..!";
}
else
{
    echo "Email is not valid...!";
}
?>

