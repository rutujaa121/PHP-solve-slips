<?php
    $db = new mysqli("localhost","root","","php-slips") or die("unable to connect");
    echo "connected successfully <br>";
    $sql="create table college(collegeno int primary key, collegename varchar(20), address varchar(20))";
    if($db->query($sql)===TRUE)
    {
        echo "table created successfully";
    }
    else
    {
        echo "error creating table".$db->error;
    }
    $db->close();
?>