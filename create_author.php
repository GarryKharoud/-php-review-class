<?php

    require_once("./connect.php");


    $sql = "INSERT INTO authors (
        first_name, 
        last_name,
        email,
        date_of_birth,
        profile

    ) VALUES (
        :first_name, 
        :last_name,
        :email,
        :date_of_birth,
        :profile

    )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":first_name", $_POST["first_name"], PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $_POST["last_name"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
    $stmt->bindParam(":date_of_birth", $_POST["date_of_birth"], PDO::PARAM_STR);
    $stmt->bindParam(":profile", $_POST["profile"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php");
?>