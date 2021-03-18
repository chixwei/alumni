<?php
include("connection.php"); //include database connection

//write query to retrive data

$sql = "SELECT name,email,tel,password FROM user";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row
    while($row = mysqli_fetch_array($results)){ //fetch the result and store as array
        echo "ID: " . $row["id"] . " Name: " . $row["name"] . " Email: " . $row["email"] ." Tel: " . $row["tel"] . " Password: " .$row["password"] . "<br>";
    } 
} else {
    echo "0 results";
}

?>