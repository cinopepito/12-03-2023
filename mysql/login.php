<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!$username && !$password){
        echo 'please enter value in the field';
       
    }

    $connection = mysqli_connect('localhost','root','','loginapp');
    if(!$connection){
        die('database failed');
    }

    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('query failed'.mysqli_error());
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
        Username: <input type="text" name='username'><br>
        Password: <input type="password" name='password'><br>
        <input type="submit" name='submit'>
    </form>
</body>
</html>