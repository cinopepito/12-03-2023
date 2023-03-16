<?php
$r = '<br>';
//Afficher les divers elements du tableau
echo "<strong>Articles Prix quantité total</strong><br>";
echo "Pomme             5    2        10      <br>";
echo "Pate              2.30  2       4.6     <br>";
echo "Creme             1.5  1        1.5     <br>";
//fin d'affichage des elements du tableau
//Creer un tableau avec tous mes titres
define('ARTICLE','Articles');
define('PRIX','Prix');
define('QUANTITE','quantité');
define('TOTAL','total');

$tabhead = [ARTICLE,PRIX,QUANTITE,TOTAL];

//creer mon premier tableau

$tabPomme = ['pomme', 5 , 2, 10];
$tabPate = ['pate', 2.30, 2 , 4.6];
$tabCreme = ['creme', 1.5 ,1, 1.5];
//fin du tbleau avec mes titres

//tableau associatif avec nos articles et leur prix
$tabProduits = [$tabPomme,$tabPate,$tabCreme];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Creons un tableau-->
    <table border=1>
        <thead>
            <tr>
                <th><?php echo $tabhead[0];?></th>
                <th><?php echo $tabhead[1];?></th>
                <th><?php echo $tabhead[2];?></th>
                <th><?php echo $tabhead[3];?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $tabProduits[0][0];?></td>
                <td><?php echo $tabProduits[0][1];?></td>
                <td><?php echo $tabProduits[0][2];?></td>
                <td><?php echo $tabProduits[0][3];?></td>
            </tr>
            <tr>
                <td><?php echo $tabProduits[1][0];?></td>
                <td><?php echo $tabProduits[1][1];?></td>
                <td><?php echo $tabProduits[1][2];?></td>
                <td><?php echo $tabProduits[1][3];?></td>
            </tr>
            <tr>
                <td><?php echo $tabProduits[2][0];?></td>
                <td><?php echo $tabProduits[2][1];?></td>
                <td><?php echo $tabProduits[2][2];?></td>
                <td><?php echo $tabProduits[2][3];?></td>
            </tr>
            
        </tbody>
    </table>
    <!-- fin du tableau -->
</body>
</html>