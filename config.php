<?php

    $database_server = "<Database Server>";
    $database_username = "<Database Username>";
    $database_password = "<Database Password>";
    $database_name = "<Database Name>";

    try {
        $conn = new PDO("sqlsrv:server = $database_server; Database = $database_name", $database_username, $database_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed: " . $e;
    }
?>