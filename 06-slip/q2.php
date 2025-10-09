<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2.php" method="POST">
        Enter file name: <input type="text" name="file1"><br>

        <input type="radio" name="option" value="1">Display type of file. <br>
        <input type="radio" name="option" value="2">Display last modification time of file <br>
        <input type="radio" name="option" value="3">Display the size of file <br>
        <input type="radio" name="option" value="4">Delete the file <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$a = $_POST['file1'];
$ch = $_POST['option'];

    if($ch == 1)
    {
        echo "Type of File : ".filetype($a);
    }
    else if($ch == 2)
    {
        echo "Last modification time : ".fileatime($a);
    }
    else if($ch == 3)
    {
        echo "Size of File : ".filesize($a);
    }
    else if($ch == 4)
    {
        unlink($a);
        echo "File Deleted Successfully";
    }

?>