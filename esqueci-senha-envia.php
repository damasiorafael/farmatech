<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
	
	// Conexão com o banco de dados
	session_destroy();
	session_start();
	include("inc/config.php");
	include("inc/phpmailer/class.phpmailer.php");
	
	//Proteção contra span
	if($_POST["segurancaEsqueciSenha"]){
		$_SESSION["segurancaEsqueciSenha"] = $_POST["segurancaEsqueciSenha"];
	?>
		<script>
				history.back();
		</script>
	<?php 
	}
	
	// Recebendo as variavéis do formulário
	$emailEsqueci	= protecao($_POST["emailEsqueci"]);
	
	$_SESSION["emailEsqueci"]		= $emailEsqueci;
	
	$sql_confere = "SELECT *
					FROM
					 `area-restrita-users`
					WHERE
					  (`area-restrita-users`.email = '$emailEsqueci')";
  	$query_confere = mysql_query($sql_confere);
	$num_confere = mysql_num_rows($query_confere);
	$row_confere = mysql_fetch_array($query_confere);
	
	if($num_confere > 0){
		session_destroy();
		session_start();
		$msg = "";
		$msg .='<style type="text/css">body,td { color:#352E62; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }</style>
	
		<div style="font:11px/1.35em Verdana, Arial, Helvetica, sans-serif;">
			<table cellspacing="0" cellpadding="0" border="0" width="98%" style="margin-top:10px; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; margin-bottom:10px;">
				<tr>
					<td align="center" valign="top">
						<table cellspacing="0" cellpadding="0" border="0" width="650">
							<tr>
								<td valign="top">
									<p><a href="http://www.farmatech.com.br" style="color:#352E62;"><img src="http://www.farmatech.com.br/img/logoTopo.png" alt="Farmatech" border="0"/></a></p></td>
							</tr>
						</table>
						<table cellspacing="0" cellpadding="0" border="0" width="650">
							<tr>
								<td valign="top">
									<h2 style="font-size: 14px; margin-top: 15px;">FARMATECH LEMBRAR SENHA</h2>
									'.$row_confere["nome"].', você solicitou sua senha no site da Farmatech!<br>
									<strong>Login:</strong> '.$emailEsqueci.'<br>
									<strong>Senha:</strong> '.$row_confere["senha"].'<br>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>';
		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 1;
		$mailer->Port = $Port; //  Indica a porta de conexao para a saida de e-mails
		$mailer->Host = $Host;
		$mailer->SMTPAuth = true;
		$mailer->Username = $Username; //Informe o e-mai o completo
		$mailer->Password = $Password; //Senha da conta de email
		$mailer->FromName = "Farmatech"; //Nome que sera exibido para o destinatario
		$mailer->From = $Username; //Obrigatorio ser a mesma caixa postal indicada em "Username"
		$mailer->AddAddress($emailEsqueci,"Farmatech");
		$mailer->AddBcc("damasio.rafael@gmail.com","Farmatech - Lembrar senha");
		$mailer->AddBcc("damasio_damasio@hotmail.com","Farmatech - Lembrar senha");
		$mailer->AddBcc("rafaeldamasio@rafaeldamasio.com.br","Farmatech - Lembrar senha");
		$mailer->Subject = "FARMATECH - LEMBRAR SENHA";
		$mailer->Body = $msg;
		$mailer->IsHTML(true);
		$mailer->Send();
		$_SESSION["envio_senha_sucesso"] = "A senha foi enviada para o email informado!";
	?>
		<script>
			window.location='esqueci-senha.php';
		</script>
	<?php
	} else {//Se achar um cadastrocom o email retorna esse erro!
		$_SESSION["erro_email_esqueci_senha"] = "Não existe cadastro com o email informado, por favor verifique e tente novamente!";
		$_SESSION["envio_cadastro_sucesso"] = "";
	?>
    	<script>
			window.location='esqueci-senha.php';
		</script>
    <?php
	}
?>