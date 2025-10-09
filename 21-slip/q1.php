<?php
$highTemps=array( 68,70,72,89,76,99,87,74,60,65,67,87,72,75,78);
$count=count($highTemps);
$total=0;
foreach($highTemps as $h)
{
    $total+=$h;
}
$avg=round($total/$count);
echo "The average high temperature for the month was $avg &amp:deg:F\n";
rsort($highTemps);
$topTemps=array_slice($highTemps,0,5);
echo"The warmest five temperatures were:<br>\n";
foreach($topTemps as $t)
{
    echo "$t &amp;deg;F<br>\n";
}
$lowTemps=array_slice($highTemps,-5,5);
echo "The coolest five temperatures were:<br>\n";
foreach($lowTemps as $l)
{
    echo "$l &amp;deg;F<br>\n";
}
?>
