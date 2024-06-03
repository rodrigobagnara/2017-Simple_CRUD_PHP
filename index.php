<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Usuários cadastrados</title>
        <link rel="stylesheet" href="assistants/css/bootstrap.min.css">
        <link rel="stylesheet" href="assistants/pages.css">
        
        <?php

            //$dbh = new PDO('mysql:host=localhost;dbname=crud-php', 'root', 'Pass123#root');

            require_once 'connect.php'; // Requisição de conexão ao banco.
        ?>
    </head>
    
    <body>
        <div class="top">
            <a href="cadastro.php">
                <button class="btn btn-primary" type="button">Cadastrar</button>
            </a>
        </div>

        <div class="container">
			<div  class="panel">
                <div class="title">
                    <h1>Usuários cadastrados</h1>
                </div>

                <div class="bodyTable">
                    <table class="table table-condensed">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($pdo->query('SELECT * from tbl_users') as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id_user'] ?></td>
                            <td><?php echo $row['user_name']." ".$row['user_last_name'] ?></td>
                            <td><?php
                                $date = explode("-", $row['birth_date']);
                                $allDate = $date[2]."/".$date[1]."/".$date[0];
                                echo $allDate;
                                ?></td>

                            <td>
                                <a href="edit.php?id_user=<?php echo $row['id_user']; ?>">
                                    <input class="btn btn-success" type="submit" value="editar">
                                </a>
                            </td>

                            <td>
                                <a href="delete.php?id_user=<?php echo $row['id_user']; ?>">
                                    <input class="btn btn-danger" type="submit" value="deletar">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
                </div>
            </div>
        </div>

    </body>
    
</html>