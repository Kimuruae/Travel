<?php
session_start();
$db_server = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "wad";

// Create connection
$conn = new mysqli($db_server, $db_username, $db_pass,$db_name);

// Check connection
if($conn){//if connection is successful
    echo"Connected to the database successfully";
}
//if the connection is unsuccessful
else{
    echo"Error!! Could not connect to the database.";
}
?> 