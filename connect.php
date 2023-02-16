<?php
    try
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=comp_1006";
        $conn = new PDO($dsn,"root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $error)
    {
        echo $error->getMessage();
        $conn = false;
    }
?>