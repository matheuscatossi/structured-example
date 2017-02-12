	<?php

	require_once "verifica_login.php";
	
	$erro_login = false;

	if($_POST) {
		if($_POST['login'] == "matheuscatossi@gmail.com" && $_POST['senha'] == '123456') {
			session_destroy();
			session_start();

			$_SESSION['usuario']    = $_POST['login'];
			$_SESSION['senha']      = $_POST['senha'];
			$_SESSION['data_login'] = date("d/m/Y");
			$_SESSION['logado']     = true;

			header("Location: home.php");
		} else {
			unset($_SESSION);
			$erro_login = true;
		}
	} else {
		session_destroy();
	}

?>

<html>
<head>
	<?php require_once "app_bootstrap.php"; ?>
	<title>Tela de login</title>
	<style>
		.row-panel {
			margin-top:40px;
		}

		.row-button {
			margin-top:20px;
		}

		.row-alert {
			margin-top:10px;
		}
	</style>
</head>
<body>
	<form method="POST" name="frm_login" id="frm_login">
		<div class="container">
			<div class="row row-panel">
				<div class="col-xs-4 col-xs-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h5 class="text-center">Exemplo login 4Linux</h5>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4 text-right">
									<h4>Login:</h4>
								</div>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="login" id="login"/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 text-right">
									<h4>Senha:</h4>
								</div>
								<div class="col-xs-8">
									<input type="password" class="form-control" name="senha" id="senha"/>
								</div>
							</div>
							<div class="row row-button">
								<div class="col-xs-4 col-xs-offset-4 text-center">
									<input type="submit" class="btn btn-primary form-control" value="Logar"/>
		 						</div>
							</div>
						</div>
					</div>
					<?php if($erro_login){ ?>
							<div class="row row-alert">
								<div class="col-xs-12">
									<div class="alert alert-danger text-center">
										<h6>Login ou senha incorretos!</h6>
									</div>
								</div>
							</div>
					<?php } ?>
				</div>	
			</div>
		</div>
	</form>
</body>
</html>
