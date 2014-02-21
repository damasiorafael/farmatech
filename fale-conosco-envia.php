<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
	
	// Conexão com o banco de dados
	include("inc/config.php");
	include("inc/phpmailer/class.phpmailer.php");
	
	//Proteção contra span
	if($_POST["seguranca"]){
		$_SESSION["seguranca"] = $_POST["seguranca"];
	?>
		<script>
				history.back();;
		</script>
	<?php 
	}
	
	// Recebendo as variavéis do formulário
	$nome				= protecao($_POST["nome"]);
	$email				= protecao($_POST["email"]);
	$endereco			= protecao($_POST["endereco"]);
	$cidade				= protecao($_POST["cidade"]);
	$estado				= protecao($_POST["estado"]);
	$assunto			= protecao($_POST["assunto"]);
	$telefone			= protecao($_POST["telefone"]);
	$mensagem			= protecao($_POST["mensagem"]);
	$data				= date("Y-m-d");	
	
	$_SESSION["nome"]		= $nome;
	$_SESSION["email"]		= $email;
	$_SESSION["endereco"]	= $endereco;
	$_SESSION["cidade"]		= $cidade;
	$_SESSION["estado"]		= $estado;
	$_SESSION["assunto"]	= $assunto;
	$_SESSION["telefone"]	= $telefone;
	$_SESSION["mensagem"]	= $mensagem;

	// Mandando e-mail
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
								<h2 style="font-size: 14px; margin-top: 15px;">FARMATECH CONTATO</h2>
								<strong>Nome:</strong> '.$nome.'<br>
								<strong>E-mail:</strong> '.$email.'<br>
								<strong>Endereço:</strong> '.$endereco.'<br>
								<strong>Cidade:</strong> '.$cidade.'<br>
								<strong>Estado:</strong> '.$estado.'<br>
								<strong>Telefone:</strong> '.$telefone.'<br>
								<strong>Assunto:</strong> '.$assunto.'<br>
								<strong>Mensagem:</strong> '.$mensagem.'<br>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>';
	/*echo $Host;
	echo $Username;
	echo $Password;
	echo $Port;*/
	$mailer = new PHPMailer();
	$mailer->IsSMTP();
	$mailer->SMTPDebug = 1;
	//$mailer->Port = "587"; //  Indica a porta de conexao para a saida de e-mails
	$mailer->Host = "localhost";
	//$mailer->SMTPAuth = false;
	//$mailer->Username = "farmatech@farmatech.com.br"; //Informe o e-mai o completo
	//$mailer->Password = "F33261770F"; //Senha da conta de email
	$mailer->FromName = "Farmatech"; //Nome que sera exibido para o destinatario
	$mailer->From = $Username; //Obrigatorio ser a mesma caixa postal indicada em "Username"
	$mailer->AddAddress($Username,"Farmatech");
	$mailer->AddBcc("damasio.rafael@gmail.com","Farmatech - Contato");
	$mailer->Subject = "FARMATECH - CONTATO";
	$mailer->Body = $msg;
	$mailer->IsHTML(true);
	if ($mailer->Send()){
		//Gravando os dados do usuário no banco de dados.
		/*echo "<script type='text/javascript'>alert('enviou');</script>";*/
		$sql_contato = "INSERT INTO contato (nome, email, endereco, cidade, estado, telefone, assunto, mensagem, respondido, excluir, data) VALUES ('$nome', '$email', '$endereco', '$cidade', '$estado','$telefone', '$assunto',  '$mensagem', '0', '0', '$data')";
		// Mandando e-mail
		$msg2 = "";
		$msg2 .= '<style type="text/css">body,td { color:#352E62; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }</style>
	
		<div style="font:11px/1.35em Verdana, Arial, Helvetica, sans-serif;">
			<table cellspacing="0" cellpadding="0" border="0" width="98%" style="margin-top:10px; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; margin-bottom:10px;">
				<tr>
					<td align="center" valign="top">
						<table cellspacing="0" cellpadding="0" border="0" width="650">
							<tr>
								<td valign="top">
									<p><a href="http://www.farmatech.com.br" style="color:#352E62;"><img src="http://www.farmatech.com.br/img/logoTopo.png" alt="FARMATECH" border="0"/></a></p></td>
							</tr>
						</table>
						<table cellspacing="0" cellpadding="0" border="0" width="650">
							<tr>
								<td valign="top">
									<h2 style="font-size: 14px; margin-top: 15px;">'.strtoupper($nome).' - CONTATO</h2>
									<strong>'.$nome.'</strong>, seu cadastro foi recebido com sucesso, em breve entraremos em contato!<br>
									Confira abaixo os seus Dados<br><br>
									<strong>Nome:</strong> '.$nome.'<br>
									<strong>E-mail:</strong> '.$email.'<br>
									<strong>Endereço:</strong> '.$endereco.'<br>
									<strong>Cidade:</strong> '.$cidade.'<br>
									<strong>Estado:</strong> '.$estado.'<br>
									<strong>Telefone:</strong> '.$telefone.'<br>
									<strong>Assunto:</strong> '.$assunto.'<br>
									<strong>Mensagem:</strong> '.$mensagem.'<br>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>';
		
		/*$mailer2 = new PHPMailer();
		$mailer2->IsSMTP();
		$mailer2->SMTPDebug = 1;
		$mailer2->Port = $Port; //  Indica a porta de conexao para a saida de e-mails
		$mailer->Host = $Host;
		$mailer->SMTPAuth = true;
		$mailer->Username = $Username; //Informe o e-mai o completo
		$mailer->Password = $Password; //Senha da conta de email
		$mailer2->FromName = "Farmatech"; //Nome que sera exibido para o destinatario
		$mailer2->From = $Username; //Obrigatorio ser a mesma caixa postal indicada em "Username"
		$mailer2->AddAddress($email,"Farmatech - Contato");
		$mailer2->AddBcc("damasio.rafael@gmail.com","Farmatech - Contato");
		$mailer2->Subject = "FARMATECH - CONTATO";
		$mailer2->Body = $msg;
		$mailer2->IsHTML(true);
		$mailer2->Send();*/
						  
		if($query_contato = mysql_query($sql_contato)){
			/*echo "<script type='text/javascript'>alert('salvou');</script>";*/
			session_destroy();
			session_start();
			$_SESSION["envio_contato_sucesso"] = "Envio contato efetuado com sucesso! Aguarde que em breve responderemos!";
			?>
				<script>
                        window.location='fale-conosco.php';
                </script>
            <?php
		}
		/*echo "<script>window.location='contato-ok.php'</script>";*/
	} else {
		$_SESSION["erro_envio_email_contato"] = "Não foi possível enviar seu formulário, por favor tente novamente!";
		?>
			<script>
                    history.back();;
            </script>
        <?php
	}
?>