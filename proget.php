<?php
echo "<strong>Articles Prix quantité</strong><br>";
echo "Pomme             5    2 <br>";
echo "Pate              2.5  2 <br>";
echo "Creme             1.5  1 <br>";

$tabhead = ['Article','prix','quantité'];
$tabPomme = ['pomme', 5, 2];
$tabPate = ['pate', 25, 2];
$tabCreme = ['creme', 1.5 ,1];
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
    <table border=1>
        <thead>
            <tr>
                <th><?php echo $tabhead[0];?></th>
                <th><?php echo $tabhead[1];?></th>
                <th><?php echo $tabhead[2];?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $tabPomme[0];?></td>
                <td><?php echo $tabPomme[1];?></td>
                <td><?php echo $tabPomme[2];?></td>
            </tr>
            <tr>
                <td><?php echo $tabPate[0];?></td>
                <td><?php echo $tabPate[1];?></td>
                <td><?php echo $tabPate[2];?></td>
            </tr>
            <tr>
                <td><?php echo $tabCreme[0];?></td>
                <td><?php echo $tabCreme[1];?></td>
                <td><?php echo $tabCreme[2];?></td>
            </tr>
            
        </tbody>
    </table>
</body>
</html>