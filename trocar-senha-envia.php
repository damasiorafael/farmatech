<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
	
	// Conex�o com o banco de dados
	include("inc/config.php");
	include("inc/phpmailer/class.phpmailer.php");
	
	//Prote��o contra span
	if($_POST["segurancaTrocarSenha"]){
		$_SESSION["segurancaTrocarSenha"] = $_POST["segurancaTrocarSenha"];
	?>
		<script>
				history.back();
		</script>
	<?php 
	}
	
	// Recebendo as variav�is do formul�rio
	$novaSenha	= protecao($_POST["novaSenha"]);
	$id_user 	= protecao($_POST["id_user"]);
	
	$sql_update = "UPDATE `area-restrita-users` SET senha='$novaSenha' WHERE id = '$id_user'";
	if($query_update = mysql_query($sql_update)){
		$_SESSION["envio_senha_sucesso"] = "A senha foi alterada com sucesso!";
	?>
		<script>
    	    window.location='trocar-senha.php';
        </script>
	<?php
	}
?>