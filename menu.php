<?php
	$listar_usuarios    = "";
	$listar_clientes    = "";
	$listar_vendedores	= "";
	$home               = "";

	if($_SESSION['tela'] == "listar_usuarios") {
		$listar_usuarios = 'class="active"';
	} else if($_SESSION['tela'] == "listar_clientes") {
		$listar_clientes = 'class="active"';
	} else if($_SESSION['tela'] == "listar_vendedores") {
		$listar_vendedores = 'class="active"';
	}  else if($_SESSION['tela'] == "home") {
		$home = 'class="active"';
	}
?>

<nav class="navbar navbar-default navbar-static-top">
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
    	<li <?php print $home;?>             ><a href="home.php">               Home</a><li>
	    <li <?php print $listar_usuarios;?>  ><a href="listar_usuarios.php">    Usuário</a><li>
		<li <?php print $listar_clientes;?>  ><a href="listar_clientes.php">    Cliente</a><li>
		<li <?php print $listar_vendedores;?>><a href="listar_vendedores.php">  Vendedor</a><li>
		<li>                                  <a href="index.php">              Logout</a><li>
	</ul>
  </div>
</nav>