<?php
    require "config.php";
    require "functions.php";
    if(isset($_POST["submit"])) {
        try {
        $name = htmlspecialchars($_POST["name"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $address = htmlspecialchars($_POST["address"]);
        $major = htmlspecialchars($_POST["major"]);

        $sql_insert = "INSERT INTO student(name, gender, address, major) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql_insert);
        $statement->bindValue(1, $name);
        $statement->bindValue(2, $gender);
        $statement->bindValue(3, $address);
        $statement->bindValue(4, $major);
        $statement->execute();
        show_alert("Data has been added!");
        } catch (Exception $e) {
            echo "Error: ".$e;
        }
    } else {
        die("Forbidden Access");
    }
?>