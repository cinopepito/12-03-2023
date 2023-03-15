<?php
$insultes=['merde','con'];
$phrase = readline('entrez votre phrase');
foreach($insultes as $insult){
   $phrase = str_replace($insult,'***',$phrase);
}
echo $phrase;
?>