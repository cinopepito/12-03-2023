<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bonjour 
    <?php 
    if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['repeter'])){
        $_GET['repeter'] = (int)$_GET['repeter'];
        if($_GET['repeter'] >= 1 && $_GET['repeter']<=100){
            for($i=0;$i<$_GET['repeter'];$i++){
                echo 'Bonjour'. $_GET['prenom'] . $_GET['nom'];
            }
        }
    }
    echo $_GET['prenom']; 
    
    ?>
    </p>
</body>
</html>