<?php
	// Conex�o com o banco de dados
	session_start();
	unset($_SESSION["usuario_logado"]);
	session_destroy();
	session_start();
	header("Location: index.php");
?>