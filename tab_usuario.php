<?php
	$tab_cadastro_usuario = "";
	$tab_listar_usuario   = "";

	if($_SESSION['tab_usuario'] == "cadastrar") {
		$tab_cadastro_usuario = 'class="active"';
	} else if($_SESSION['tab_usuario'] == "listar") {
		$tab_listar_usuario = 'class="active"';
	} 
?>

<ul class="nav nav-tabs">
  <li <?php print $tab_listar_usuario;?>  ><a href="listar_usuarios.php">Lista de usuários</a></li>
  <li <?php print $tab_cadastro_usuario?> ><a href="adicionar_usuario.php">Cadastrar Usuário</a></li>
</ul>