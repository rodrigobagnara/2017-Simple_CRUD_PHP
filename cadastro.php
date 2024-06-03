<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuários</title>
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
					<h1>Cadastro de Usuário</h1>
				</div>
				
				<div class="bodyForm col-md-12">
					<form action="save.php" method="post">

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nome:</span>
                            </div>
                            <input type="text" name="first-name" class="form-control formI" placeholder="Primeiro nome">
                        </div>

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sobrenome:</span>
                            </div>
                            <input type="text" name="last-name" class="form-control formI" placeholder="Sobrenome">
                        </div>

                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Data de nascimento:</span>
                            </div>
                            <input type="date" name="birth-date" class="form-control formI" placeholder="dd/mm/aaaa">
                        </div>

						<input type="submit" value="Cadastrar" class="btn btn-success">
						<input type="reset" value="Limpar dados" class="btn btn-warning">
					</form>
				</div>
			</div>
        </div>
    </body>
</html>