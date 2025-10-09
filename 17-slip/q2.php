<html>
    <body>
        <table border="2">
        <?php
        $file=fopen("item.dat","r");
        echo"<tr>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Unit Sold</th>
        <th>Rate</th>
        <th>Total</th>
        </tr>";
        while(($line=fgets($file))!=false)
        {
            $read=explode("-",trim($line));
            $unit=0;
            for($i=3;$i<=4;$i++)
            {
                $unit=$unit*$read[$i];
            }
            $read[]=$unit;
            echo"<tr>";
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