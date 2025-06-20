<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "harvesthub-copy";

    
    $conn = new mysqli("localhost", "root", "", "harvesthub-copy");
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
