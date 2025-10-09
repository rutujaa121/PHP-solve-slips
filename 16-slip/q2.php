<html>
    <body>
        <form method="post" action="#">
        Enter roll no:<input type="text" name="rno"><br>
        Enter name:<input type="text" name="name"><br>
        Java:<input type="text" name="s1"><br>
        Php:<input type="text" name="s2"><br>
        Python:<input type="text" name="s3"><br>
        OS:<input type="text" name="s4"><br>
        TCS:<input type="text" name="s5">
        <input type="submit" value="submit">
            </form>
    </body>
</html>
<html>
    <body>
<?php
$rno=explode(",",$_POST['rno']);
$name=explode(",",$_POST['name']);
$s1=explode(",",$_POST['s1']);
$s2=explode(",",$_POST['s2']);
$s3=explode(",",$_POST['s3']);
$s4=explode(",",$_POST['s4']);
$s5=explode(",",$_POST['s5']);
?>
<center>
    <table border="1" height=500 width=600>
        <?php
        $c=count($rno);
        echo"<tr><th>Roll No</th>
        <th>Name</th>
        <th>Java</th>
        <th>Php</th>
        <th>Python</th>
        <th>OS</th>
        <th>TCS</th>
        <th>Total</th>
       <th>Percentage</th> </tr>";
       for($i=0;$i<$c;$i++)
       {
        $t=$s1[$i]+$s2[$i]+$s3[$i]+$s4[$i]+$s5[$i];
        $p=$t/5;
        echo"<tr><td>".$rno[$i]."</td>
        <td>".$name[$i]."</td>
        <td>".$s1[$i]."</td>
        <td>".$s2[$i]."</td>
        <td>".$s3[$i]."</td>
        <td>".$s4[$i]."</td>
        <td>".$s5[$i]."</td>
        <td>".$t."</td>
        <td>".$p."</td></tr>";
       }
        ?>
    </table>
</center>
    </body>
</html>

