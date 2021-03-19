<?php
include("connection.php");

if(isset($_POST["update"]))
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $password = $_POST["password"];

    $sql = "UPDATE user SET name ='$name', email='$email', tel='$tel', password='$password' WHERE id= '$id'";
    $results= mysqli_query($conn,$sql);

    if ($results){
        echo "Data is updated.";
    }
    else{
        echo "Data is NOT updated. ";
    }
}
?>