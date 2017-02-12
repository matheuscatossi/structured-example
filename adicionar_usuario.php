<?php
	require_once "verifica_login.php";

	$_SESSION['tab_usuario'] = "cadastrar";

	if($_POST) {
		require ("config/connect.php");

		$nome  = $_POST['nome'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$query = "SQL INSERT INTO tb_usuario (nome, email, senha) VALUES (\"$nome\", \"$email\", \"$senha\")";

		mysql_query($query);
		$query = "SELECT count(*) as qtde FROM tb_usuario WHERE email = \"$email\"";
		$result = mysql_query($query);

		if(mysql_num_rows($result) > 0) {
			header("Location: listar_usuarios.php");
		}
	}
?>
<html>
	<head>
		<?php require_once "app_bootstrap.php"; ?>
		<title>Tela de login</title>
		<style>
			.row-button {
				margin-top:20px;
			}

			.row-alert {
				margin-top:10px;
			}
			.row-tab {
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body>
		<form method="POST" name="frm_login" id="frm_login">
			<div class="row">
				<div class="col-xs-12">
					<?php require_once("menu.php");?>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row-tab">
					<div class="col-xs-12">
						<?php require_once("tab_usuario.php");?>
					</div>
				</div>
				<div class="row row-panel">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Cadastro de usuário</h4>
							</div>
							<div class="panel-body">

							</div>
							<ul class="list-group">
							  <h6><b style="margin-left:20px">Pessoal</b></h6>
							  <li class="list-group-item" style="margin-left:10px; margin-right:10px;">
							  	<div class="row">
								  		<div class="col-xs-1 text-right">
												<h4>Nome:</h4>
											</div>
											<div class="col-xs-6">
												<input type="text" class="form-control" name="nome" id="nome"/>
											</div>
											<div class="col-xs-3 text-right">
												<h4>Data de nascimento:</h4>
											</div>
											<div class="col-xs-2">
												<input type="text" class="form-control" name="data_nasc" id="data_nasc"/>
											</div>
							  	</div>
								</li>



							  </ul>

			

								<div class="row">
									<div class="col-xs-4 text-right">
										<h4>Email:</h4>
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="email" id="email"/>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4 text-right">
										<h4>Senha:</h4>
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="senha" id="senha"/>
									</div>
								</div>
								<div class="row row-button">
									<div class="col-xs-4 col-xs-offset-4 text-center">
										<input type="submit" class="btn btn-primary form-control" value="Cadastrar"/>
			 						</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</form>
	</body>
</html>
