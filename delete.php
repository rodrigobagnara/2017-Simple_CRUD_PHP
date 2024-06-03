<?php

    $query = null;

    try {
        require_once 'connect.php'; //Requisição de conexão ao banco

        //Recuperando a ID
        $id_user = isset($_GET['id_user']) ? $_GET['id_user'] :null;

        //Valida o ID
        if(empty($id_user)) {
            //echo "ID não informado";
            exit;
        } else {
            //echo "ID: ".$id_user;
        }

        $sql = "DELETE FROM `crud-php`.tbl_users WHERE (id_user = '$id_user');";
        $query = $pdo->prepare($sql);

        $query->execute();
    } catch(PDOException $e){
        print_r($query->erroInfo);
    } finally {
        header("location: index.php");
    }

?>