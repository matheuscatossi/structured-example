<?php 
	session_start();

	if($_SESSION){
		if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
			session_destroy();
			header("Location: index.php");
		}
	} else {
		header("Location");
	}