<?php

    $servername = "localhost";
    $dbname = "crud-php";
    $username = "root";
    $password = "Pass123#root";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($pdo) {
            //echo "Connected to the database successfully!";
        }

    } catch(PDOException $e) {
        //echo 'Connection failed!<br>';
        return $e->getMessage();
    }

?>