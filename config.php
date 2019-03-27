<?php

    $database_server = "";
    $database_username = "";
    $database_password = "";
    $database_name = "";

    try {
        $conn = new PDO("sqlsrv:server = $database_server; Database = $database_name", $database_username, $database_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed: " . $e;
    }
?>