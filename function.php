<?php
while(true){
    $mot = readline('enter your word :');
    if($mot == ''){
        exit('fin du script');
    }
    $reversed = strrev(strtolower($mot));
    if(strtolower($mot) == $reversed){
        echo ' ce mot est un palyndrome';
    }else{
        echo'ce mot n\'est pas un palyndrome'."\n";
    }
}
?>