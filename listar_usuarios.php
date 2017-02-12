<?php 
	require_once "verifica_login.php";
	require_once "config/connect.php";

	$query = "SELECT * FROM tb_usuario";
	$result = mysql_query($query);

	if(mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_assoc($result)) {
    	$arr_users[$row['id']] = $row;
		}
	}

	$_SESSION['tela']        = "listar_usuarios";
	$_SESSION['tab_usuario'] = "listar";
?>

<html>
<head>
	<?php require_once "app_bootstrap.php"; ?>
	<title>Lista de usuarios</title>
	<style>
		.row-tab {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div class="row row-panel">
		<div class="col-xs-12">
			<?php require_once("menu.php");?>
		</div>
	</div>
	<div class="container">
		<div class="row row-tab">
			<div class="col-xs-12">
				<?php require_once("tab_usuario.php");?>
			</div>
		</div>
		<div class="row ">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center">Lista de usuários</h4>
					</div>
					<div class="panel-body">
						<table class="table table-horvered">
							<thead>
								<tr>
									<th class="text-center" >ID</th>
									<th class="text-center" >Nome</th>
									<th class="text-center" >Email</th>
									<th class="text-center" >Alterar informações</th>
									<th class="text-center" >Gerar/Recuperar senha</th>
									<th class="text-center" >Inativar usuário</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach ($arr_users as $key => $value) {?>
										<tr><?php
											?><td><?php print $value['id']?></td><?php
											?><td><?php print $value['nome']?></td><?php
											?><td><?php print $value['email']?></td>
											<td class="text-center"><i class="glyphicon glyphicon-pencil img-link"></i></td>
											<td class="text-center"><i class="glyphicon glyphicon-lock   img-link"></i></td>
											<td class="text-center"><i class="glyphicon glyphicon-remove img-link text-danger"></i></td>
										</tr><?php
									}
								?>
							</tbody>
						</table>
					</div>
				</div>		
			</div>
		</div>
	</div>			
</body>
</html>
