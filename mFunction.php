<?php
function showAllData(){
    global $connection;
    $query = "SELECT * FROM customers";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('connexion failed'.mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

?>