<?php
$chaine='cette chaine va etre melangee sale';
$newChaine = str_shuffle($chaine);
echo $newChaine .'<br>';
$letter = 'CECI EST UNE PARTIE DE MON EXPERIENCE EN TANT QUE DEVELOPPEUR';
$newLetter = strtolower($letter);
echo $newLetter .'<br>';
$date = date('d'. '/' . 'm'. '/' .'Y'. '/' .'H'. ':' .'i');
echo $date.'!<br>';

function direBonJour($nom){
    echo 'Bonjour '. $nom .'!<br>';
}
direBonJour('Marie').'<br>';
direBonJour('akwaaba').'<br>';
direBonJour('Noussiaf').'<br>';

function volume($r,$pi,$h){
    $volume = $r*$r*$pi*$h;
    return $volume;
}
$volume = volume(5,3.14,10);
echo "le volume d'un cone de rayon 5, de hauteur 10, est : " . $volume.'.'. '<br>';

$prenoms = array('pierre','paul','jacques','amber');
echo $prenoms[0].'<br>';
$prenoms[]='sandero';
echo'<pre>';
print_r($prenoms);
echo'</pre>';

$coordonees = array(
    'prenom'=>'Francois',
    'nom'=>'Dupont',
    'adresse'=>'3 rue du paradis',
    'ville'=>'Marseille'
);

foreach($coordonees as $cle=>$element){
    echo 'mon ' . $cle . ' est ' . $element .'<br>';
}

if(array_key_exists('nom',$coordonees)){
    echo 'la cle "nom" se trouve dans les coordonees</br>';
}
if(array_key_exists('pays',$coordonees)){
    echo 'la cle "pays" se trouve dans les coordonees';
}


$fruits = array('mirtille','mangue','baobab','lemon');
if(in_array('mirtille',$fruits)){
    echo 'le fruit "mirtille" fait partie de la liste des fruits de la liste<br>';
}
$position = array_search('mangue',$fruits);
echo 'la mangue se trouve a la position : '. $position;
?>