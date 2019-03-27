<?php
    require "config.php";
    require "functions.php";
    
    $id = $_GET["id"];
    $sql_delete = "DELETE FROM student WHERE id=$id";
    $conn->exec($sql_delete);
    show_alert("Data has been deleted!");
?>