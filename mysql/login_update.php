<?php
    include('db.php');
    include('function.php');
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
  
   <form action="" method="post">
    <input type="tex" name="username">
    <input type="password" name="password">
    <select name="id" id="">
    <?php
    dataShowAllData();
    ?>
        <!-- <option value="">1</option> -->
    </select>
    <input type="submit" name="submit" value="UPDATE">
   </form>
</body>
</html>