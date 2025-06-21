<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "harvesthub";

    
    $conn = new mysqli("localhost", "root", "", "harvesthub");
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
