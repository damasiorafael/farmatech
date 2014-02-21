<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
	$Username;
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
	$telefone			= protecao($_POST["telefone"]);
	$mensagem			= protecao($_POST["mensagem"]);
	$data				= date("Y-m-d");
	
	$_SESSION["nome"]		= $nome;
	$_SESSION["email"]		= $email;
	$_SESSION["endereco"]	= $endereco;
	$_SESSION["cidade"]		= $cidade;
	$_SESSION["estado"]		= $estado;
	$_SESSION["telefone"]	= $telefone;
	$_SESSION["mensagem"]	= $mensagem;
	
	// Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'admin/uploads/receitas/';
	// Tamanho máximo do arquivo (em Bytes)
	$_UP['tamanho'] = 1024 * 1024 * 1; // 1Mb
	// Array com as extensões permitidas
	$_UP['extensoes'] = array('jpg', 'png', 'gif', 'doc', 'txt', 'pdf');
	// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
	$_UP['renomeia'] = false;
	// Array com os tipos de erros de upload do PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

	// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
	/*if ($_FILES['receita']['error'] != 0) {
		die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
		exit; // Para a execução do script
	}*/
	
	// Faz a verificação da extensão do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['receita']['name'])));
	
	if (array_search($extensao, $_UP['extensoes']) === false) {
		$_SESSION["erro_extensao"] = "Por favor, envie arquivos com as seguintes extens&otilde;es: jpg, png, gif, doc, txt ou pdf";
	?>
		<script>
			history.back();
		</script>
	<?php
	}
	
	// Faz a verificação do tamanho do arquivo
	else if ($_UP['tamanho'] < $_FILES['receita']['size']) {
		$_SESSION["erro_tamanho"] = "O arquivo enviado é muito grande, envie arquivos de até 1Mb.";
	?>
		<script>
			history.back();
		</script>
	<?php
	}
	
	// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
	else {
	// Primeiro verifica se deve trocar o nome do arquivo
		/*if ($_UP['renomeia'] == true) {
			// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			$nome_final = time().'.jpg';
		} else {*/
			// Mantém o nome original do arquivo
			$nome_final = $_FILES['receita']['name'];
		//}
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['receita']['tmp_name'], $_UP['pasta'].$nome_final)){
			// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
			$_SESSION["upload_sucesso"] = "Upload efetuado com sucesso!";
		} else {
			// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			$_SESSION["erro_qualquer"] = "Não foi possível enviar o arquivo, tente novamente";
		?>
			<script>
                    history.back();
            </script>
        <?php
		}
	}
	
	$receita = $nome_final;

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
								<h2 style="font-size: 14px; margin-top: 15px;">FARMATECH ORÇAMENTO</h2>
								<strong>Nome:</strong> '.$nome.'<br>
								<strong>E-mail:</strong> '.$email.'<br>
								<strong>Endereço:</strong> '.$endereco.'<br>
								<strong>Cidade:</strong> '.$cidade.'<br>
								<strong>Estado:</strong> '.$estado.'<br>
								<strong>Telefone:</strong> '.$telefone.'<br>
								<strong>Receita:</strong><a href="http://www.farmatech.com.br/admin/uploads/receitas/'.$receita.'" title="Receita">Baixe o arquivo</a><br>
								<strong>Mensagem:</strong> '.$mensagem.'<br>
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
	//$mailer->Port = "587"; //  Indica a porta de conexao para a saida de e-mails
	$mailer->Host = "localhost";
	//$mailer->SMTPAuth = true;
	//$mailer->Username = "farmatech@farmatech.com.br"; //Informe o e-mai o completo
	//$mailer->Password = "F33261770F"; //Senha da conta de email
	$mailer->FromName = "Farmatech"; //Nome que sera exibido para o destinatario
	$mailer->From = $Username; //Obrigatorio ser a mesma caixa postal indicada em "Username"
	$mailer->AddAddress($Username,"Farmatech");
	$mailer->AddBcc("damasio.rafael@gmail.com","Farmatech - Orçamento");
	$mailer->Subject = "FARMATECH - ORÇAMENTO";
	$mailer->Body = $msg;
	//$mailer->AddAttachment('/admin/uploads/receitas/'.$receita);
	$mailer->IsHTML(true);
	
	if($mailer->Send()){
		//Gravando os dados do usuário no banco de dados.
		/*echo "<script type='text/javascript'>alert('enviou');</script>";*/
		$sql_orcamento = "INSERT INTO orcamento (nome, email, endereco, cidade, estado, telefone, receita, mensagem, respondido, excluir, data) VALUES ('$nome', '$email', '$endereco', '$cidade', '$estado','$telefone', '$receita',  '$mensagem', '0', '0', '$data')";
		// Mandando e-mail
		$msg2 = "";
		$msg2 .='<style type="text/css">body,td { color:#352E62; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }</style>
	
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
									<h2 style="font-size: 14px; margin-top: 15px;">'.strtoupper($nome).' - CADASTRO</h2>
									<strong>'.$nome.'</strong>, seu cadastro foi recebido com sucesso, em breve entraremos em contato!<br>
									Confira abaixo os seus Dados<br><br>
									<strong>Nome:</strong> '.$nome.'<br>
									<strong>E-mail:</strong> '.$email.'<br>
									<strong>Endereço:</strong> '.$endereco.'<br>
									<strong>Cidade:</strong> '.$cidade.'<br>
									<strong>Estado:</strong> '.$estado.'<br>
									<strong>Telefone:</strong> '.$telefone.'<br>
									<strong>Receita:</strong><a href="http://www.farmatech.com.br/admin/uploads/'.$receita.'" title="Receita">Baixe o arquivo</a><br>
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
		//$mailer2->SMTPDebug = 1;
		$mailer2->Port = $Port; //  Indica a porta de conexao para a saida de e-mails
		$mailer2->Host = $Host;
		$mailer2->SMTPAuth = true;
		$mailer2->Username = $Username; //Informe o e-mai o completo
		$mailer2->Password = $Password; //Senha da conta de email
		$mailer2->FromName = "Farmatech"; //Nome que sera exibido para o destinatario
		$mailer2->From = $Username; //Obrigatorio ser a mesma caixa postal indicada em "Username"
		$mailer2->AddAddress($email,"Farmatech - Orçamento");
		$mailer2->AddBcc("damasio.rafael@gmail.com","Farmatech - Orçamento");
		$mailer2->Subject = "FARMATECH - ORÇAMENTO";
		$mailer2->Body = $msg;
		$mailer2->AddAttachment('/admin/uploads/receitas/'.$receita);
		$mailer2->IsHTML(true);
		$mailer2->Send();*/
						  
		if($query_orcamento = mysql_query($sql_orcamento)){
			/*echo "<script type='text/javascript'>alert('salvou');</script>";*/
			session_destroy();
			session_start();
			$_SESSION["envio_orcamento_sucesso"] = "Envio de pedido de or&ccedil;amento efetuado com sucesso! Aguarde que em breve responderemos seu contato!";
			?>
				<script>
                        window.location='orcamento.php';
                </script>
            <?php
		}
		/*echo "<script>window.location='contato-ok.php'</script>";*/
	} else {
		$_SESSION["erro_envio_email"] = "Não foi possível enviar seu formulário, por favor tente novamente!";
		?>
			<script>
                    history.back();
            </script>
        <?php
	}
?>