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
				history.back();
		</script>
	<?php 
	}
	
	// Recebendo as variavéis do formulário
	$nome				= protecao($_POST["nome"]);
	$email				= protecao($_POST["email"]);
	$endereco			= protecao($_POST["endereco"]);
	$cidade				= protecao($_POST["cidade"]);
	$estado				= protecao($_POST["estado"]);
	$cep				= protecao($_POST["cep"]);
	$telefone			= protecao($_POST["telefone"]);
	$senha				= protecao($_POST["senha"]);
	$data				= date("Y-m-d");	
	
	$_SESSION["nome"]		= $nome;
	$_SESSION["email"]		= $email;
	$_SESSION["endereco"]	= $endereco;
	$_SESSION["cidade"]		= $cidade;
	$_SESSION["estado"]		= $estado;
	$_SESSION["cep"]		= $cep;
	$_SESSION["telefone"]	= $telefone;
	$_SESSION["senha"]		= $senha;
	
	$sql_confere = "SELECT *
					FROM
					 `area-restrita-users`
					WHERE
					  (`area-restrita-users`.email = '$email')";
  	$query_confere = mysql_query($sql_confere);
	$num_confere = mysql_num_rows($query_confere);
	$row_confere = mysql_fetch_array($query_confere);
	
	if($num_confere == 0){
		// echo "entrei aqui";
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
									<h2 style="font-size: 14px; margin-top: 15px;">FARMATECH CADASTRO ÁREA RESTRITA</h2>
									'.$nome.', você acaba de efetuar o cadastro no site da Farmatech<br> Segue os dados para acessar o sistema!<br>
									<strong>E-mail:</strong> '.$email.'<br>
									<strong>Senha:</strong> '.$senha.'<br>
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
		$mailer->AddAddress("rafaeldamasio@rafaeldamasio.com.br","Farmatech");
		$mailer->AddBcc("damasio.rafael@gmail.com","Farmatech - Cadastro Área Restrita");
		$mailer->Subject = "FARMATECH - CADASTRO ÁREA RESTRITA";
		$mailer->Body = $msg;
		$mailer->IsHTML(true);
		if ($mailer->Send()){
			//Gravando os dados do usuário no banco de dados.
			$sql_users = "INSERT INTO `area-restrita-users` (nome, email, endereco, cidade, estado, cep, telefone, senha, ativo, excluir, data) VALUES ('$nome', '$email', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$senha',  '1', '0', '$data')";
							  
			if($query_users = mysql_query($sql_users)){
				session_destroy();
				session_start();
				$_SESSION["envio_cadastro_sucesso"] = "Cadastro efetuado com sucesso! Digite seus dados para acessar o sistema!";
				?>
					<script>
						window.location='login.php';
					</script>
				<?php
			}
		} else {
			$_SESSION["erro_envio_email"] = "Não foi possível enviar seu formulário, por favor tente novamente!";
			?>
				<script>
					history.back();
				</script>
			<?php
		}
	} else {//Se achar um cadastro com o email retorna esse erro!
		$_SESSION["erro_user_cadastro"] = "Já existe um usuário com o email informado! Por favor verifique e cadastre-se novamente!";
	?>
    	<script>
			window.location='area-restrita-cadastro.php';
		</script>
    <?php
	}
?>