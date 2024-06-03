 <?php

     $query = null;

    try {
        //Requisição de conexão ao banco
        require_once 'connect.php';

        //Recebe os dados do formulario
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $birth_date = $_POST['birth-date'];

        //Código para inserir no banco
        $sql = "INSERT INTO tbl_users (user_name, user_last_name, birth_date) VALUES ('$first_name', '$last_name', '$birth_date')";

        //Prepara o codigo para sql
        $query = $pdo->prepare($sql);

        //Executa a query
        $query->execute();
    } catch(PDOException $e){
        return $e->getMessage();
    } finally {
        header("location: index.php");
    }
    
 ?>