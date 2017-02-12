<?php

	require_once "verifica_login.php";
	$_SESSION['tela'] = "home";

	 
	require_once "verifica_login.php";
	require_once "config/connect.php";

	$query = "SELECT * FROM tb_usuario WHERE email = '" . $_SESSION['usuario'] . "'";
	$result = mysql_query($query);

	if(mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_assoc($result)) {
    	$arr_user = $row;
		}
	}

	$_SESSION['tela']        = "home";
	$_SESSION['tab_usuario'] = "home";
	
?>
<html>
	<head>
		<title>home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>  
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12">
				<?php require_once("menu.php");?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2">
					<div class="panel panel-default" style="height:200px;">
					</div>
				</div>
				<div class="col-xs-8">
					<h3><?php print $arr_user['nome'];?></h3>
				</div>
			</div>
		</div>
	</body>
</html>