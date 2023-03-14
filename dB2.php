<?php
$connection = mysqli_connect('localhost','root','','store');
if(!$connection){
    die('connexion failed'.mysqli_error());
}

?>