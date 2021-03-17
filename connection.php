<?php

$servername= "localhost:10365";
$username= "Kaweiee";
$password= "@Kaweieedatabase";
$database= "kaweiee";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "connect successful";

}

?>