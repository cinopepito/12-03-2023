<?php
$notes = array(10,20,13);
$sum = array_sum($notes);
echo $sum."\n";
var_dump($sum)."\n";
$length = count($notes);
echo($length)."\n";
$moyenne = $sum / $length;
echo $moyenne."\n";
?>