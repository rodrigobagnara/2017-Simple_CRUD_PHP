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

        $sql = "SELECT id_user, user_name, user_last_name, birth_date FROM tbl_users WHERE id_user = '$id_user'";
        $query = $pdo->prepare($sql);

        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(!is_array($result)){
            echo "Nenhum cadastro encontrado!";
            exit;
        }
    } catch(PDOException $e){
        return $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <title>Editar Usuários</title>
        <link rel="stylesheet" href="assistants/css/bootstrap.min.css">
        <link rel="stylesheet" href="assistants/pages.css">
    </head>
    
    <body>
		
		<div class="top">
			<a href="index.php">
				<button class="btn btn-primary" type="button">Cadastrados</button>
			</a>
		</div>
			
		<div class="container">
			<div  class="panel">
				
				<div class="title">
					<h1>Editar usuário</h1>
				</div>
				
				<div class="bodyForm col-md-12">
					<form action="edit_save.php" method="post">

                        <label> ID usuário: </label> <?php echo $result['id_user']; ?>

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nome:</span>
                            </div>
                            <input type="text" name="first-name" class="form-control formI" placeholder="Primeiro nome" value="<?php echo $result['user_name']; ?>">
                        </div>

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sobrenome:</span>
                            </div>
                            <input type="text" name="last-name" class="form-control formI" placeholder="Sobrenome" value="<?php echo $result['user_last_name']; ?>">
                        </div>

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Data de nascimento:</span>
                            </div>
                            <input type="date" name="birth-date" class="form-control formI" placeholder="dd/mm/aaaa" value="<?php echo $result['birth_date']; ?>">
                        </div>

						<input type="hidden" name="id_user" value="<?php echo $result['id_user']; ?>" class="formI">

                        <input type="submit" value="Salvar" class="btn btn-success">
                        <input type="reset" value="Limpar dados" class="btn btn-warning">
					</form>
				</div>
			</div>
		</div>
        </div>
    </body>
    
</html>