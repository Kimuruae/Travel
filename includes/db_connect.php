<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "tour";

    // Create connection
    $conn = new mysqli(localhost,root,tour);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?> 