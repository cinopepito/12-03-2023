

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
    if(isset($_POST['password']) && $_POST['password']=='kangourou'){
        echo'<h1>Voici le code source de la page<h1><br>';
        echo'<p>CDETR-DFJC-CKYR-PDRG</p><br>';
       }else{
        echo'le code que vous avez entrer est faux';
       }
}
?>
</body>
</html>