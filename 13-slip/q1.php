<html>
    <body>
        <table border="1px" height=600px width=600px>
            <?php
            $a=0;
            for($col=0;$col<8;$col++)
            {
                echo"<tr>";
                $a=$col;
                for($row=0;$row<8;$row++)
                {
                    if($a%2==0)
                    {
                        echo"<td bgcolor=black></td>";
                        $a++;
                    }
                    else
                    {
                        echo"<td bgcolor=white></td>";
                        $a++;   
                    }
                }
                echo"</tr>";
            }
            ?>
        </table>
    </body>
</html>