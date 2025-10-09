<?php
function calculate($a=1,$b=1,$ch="1")
{
    switch($ch)
    {
        case 1:echo"Addition:". $a+$b;
            break;
        case 2:echo"Substraction:". $a-$b;
            break;
        case 3:echo"Multiplication:". $a*$b;
            break;
        case 4:echo"Division:". $a/$b;
            break;
    }
}
?>