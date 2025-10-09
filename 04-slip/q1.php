<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="q1.php" method="POST">
        Enter first file name: <input type="text" name="file1"><br>
        Enter second file name: <input type="text" name="file2"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$a = $_POST['file1'];
$b = $_POST['file2'];

     if(fopen($a,"r"))
     {
            echo "File Copied Successfully";
            copy($a,$b);
     }
     else
     {
        echo "File Not Found";
     }
?>