<?php

    $servername = "localhost"; // Servidor de banco de dados.
    $dbname = "crud-php";      // Base de dados.
    $username = "root";        // Usuário da base de dados.
    $password = "root";        // Senha do usuário da base de dados.

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
