<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2.php" method="POST">
        
        Enter choice <input type="text" name="c"><br>
        1.Insert an Element in Queue <br><br>
        2. Delete an element from Queue <br><br>
        3. Display the contents of Queue <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $ch = $_POST["c"];
    $a = array(10,20,30);

    switch ($ch)
    {
        case 1 : $c=array_unshift($a, 60);
        print_r($c);
        break;

        case 2: $c=array_shift($a);
        print_r($a);
        break;

        case 3: print_r($a);
        break;
    }
?>