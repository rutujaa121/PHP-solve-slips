<?php 
    $conn = pg_connect("host=localhost port=5432 dbname=tybcs user=postgres password=root");
    if($conn){
        echo "connected";
    }
    else{
        echo "not connected";
    }
   // $sql = "insert into college(cno,cname)values(101,'bhavna'),(102,'rutu')";
   // $result = pg_query($conn,$sql);
?>