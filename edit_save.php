<?php

    $query = null;

    try {
        //Requisição de conexão ao banco
        require_once 'connect.php';

        //Recebe os dados do formulario
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $birth_date = $_POST['birth-date'];
        $id_user = $_POST['id_user'];

        //Código para inserir no banco
        $sql = "UPDATE tbl_users SET user_name = '$first_name', user_last_name = '$last_name', birth_date = '$birth_date' WHERE id_user = '$id_user'";

        //Prepara o codigo para sql
        $query = $pdo->prepare($sql);

        $query->execute();
    } catch(PDOException $e){
        return $e->getMessage();
    } finally {
        header("location: index.php");
    }

?>