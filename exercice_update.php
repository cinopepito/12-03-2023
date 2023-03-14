<?php
include('dB2.php');
include('mFunction.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE customers SET ";
    $query.= "username = '$name',";
    $query.= "password = '$password'";
    $query.= "WHERE id = $id";

    $result = mysqli_query($connection,$query);
        if(!$result){
            die('query failed'.mysqli_error($connection));
        }
    
}

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
    <form action="" method='post'>
        Name: <input type="text" name='name'><br>
        Password: <input type="password" name='password'><br>
        <select name="id" id="">
    <?php
   showAllData();
    ?>
            <option value="">1</option>
        </select><br>
        <input type="submit" name='submit' value='update'>
    </form>
</body>
</html>