<?php

    $database_server = "wkappserver.database.windows.net";
    $database_username = "lixerion";
    $database_password = "Emperor123";
    $database_name = "User";

    try {
        $conn = new PDO("sqlsrv:server = $database_server; Database = $database_name", $database_username, $database_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed: " . $e;
    }
?>