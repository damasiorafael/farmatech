<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
	
	// Conexão com o banco de dados
	error_reporting(0);
	session_destroy();
	session_start();
	include("inc/config.php");
	include("inc/phpmailer/class.phpmailer.php");
	
	//Proteção contra span
	if($_POST["segurancaLogin"]){
		$_SESSION["segurancaLogin"] = $_POST["segurancaLogin"];
	?>
		<script>
				history.back();
		</script>
	<?php 
	}
	
	// Recebendo as variavéis do formulário
	$email				= protecao($_POST["email"]);
	$senha				= protecao($_POST["senha"]);
	
	$_SESSION["email"]		= $email;
	
	$sql_confere = "SELECT *
					FROM
					 `area-restrita-users`
					WHERE
					  (`area-restrita-users`.email = '$email')
					AND
					  (`area-restrita-users`.senha = '$senha')";
  	$query_confere = mysql_query($sql_confere);
	$num_confere = mysql_num_rows($query_confere);
	$row_confere = mysql_fetch_array($query_confere);
	
	if($num_confere > 0){
		session_destroy();
		session_start();
		$_SESSION["usuario_logado"]		= 1;
		$_SESSION["usuario"]			= $email;
		?>
			<script>
                window.location='area-restrita.php';
            </script>
        <?php
	} else {//Se achar um cadastro com o email retorna esse erro!
		$_SESSION["usuario_logado"]		= 0;
		$_SESSION["erro_user_login"] = "Email ou Senha incorretos, por favor verifique! Cheque seu email e senhas e tente novamente!";
		$_SESSION["envio_cadastro_sucesso"] = "";
	?>
    	<script>
			window.location='login.php';
		</script>
    <?php
	}
?>