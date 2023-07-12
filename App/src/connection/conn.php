<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "EmerVix";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error){
    $error = $conn->connect_error;
    echo("Not connected: " . $error);
}


?>