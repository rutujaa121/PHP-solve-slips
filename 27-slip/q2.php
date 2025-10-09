<html>
    <body>
        <table border="2">
        <?php
        $file=fopen("student.dat","r");
        echo"<tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>OS</th>
        <th>WT</th>
        <th>DS</th>
        <th>Python</th>
        <th>Java</th>
        <th>Total</th>
        <th>Percentage</th>
        </tr>";
        while(($line=fgets($file))!=false)
        {
            $read=explode("-",trim($line));
            $marks=0;
            for($i=2;$i<=6;$i++)
            {
                $marks=$marks+$read[$i];
            }
            $per=$marks/6;
            $read[]=$marks;
            $read[]=$per;
            echo "<tr>";
            foreach($read as $value)
            {
                echo "<td>$value</td>";
            }
            echo"</tr>";
        }
        ?>
        </table>
    </body>
</html>
