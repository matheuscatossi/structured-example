<?php 

	require_once "verifica_login.php";

	$_SESSION['tela'] = "listar_clientes";

	$clientes = [
		[
				"id"   => 1,
				"nome" => "Matheus",
		],
			[
				"id"   => 2,
				"nome" => "Matheus",
		],
			[
				"id"   => 3,
				"nome" => "Matheus",
		],
	];
?>

<html>
<head>
	<?php require_once "app_bootstrap.php"; ?>
	<title>Lista de clientes</title>
</head>
<body>
	<div class="row row-panel">
		<div class="col-xs-12">
			<?php require_once("menu.php");?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5 class="text-center">Lista de clientes</h5>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-horvered table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nome</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach ($clientes as $key => $value) {
										?><tr><?php
											?><td><?php print $value['id']?></td><?php
											?><td><?php print $value['nome']?></td><?php
										?></tr><?php
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
