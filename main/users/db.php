<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_database = "final_project";

    // Create connection
    $con = mysqli_connect($db_host, $db_user, $db_password, $db_database);

    // Check connection
    if (!$con) {
        die("Failed to connect: " . mysqli_connect_error());
    }
?>
