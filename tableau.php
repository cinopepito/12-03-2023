<?php
$uneVariable = 'Bonjour';
$r ='<br>';
#affichons la valeur de la variable
echo $uneVariable . $r;
#declaration de la variable
$uneVariable = 'Au revoir';
echo $uneVariable . $r;
#declarartion de la constante
define('pi',22/7);
echo pi . $r;
#declaration de pi
define('g',9.8);
echo g . $r;
?>
