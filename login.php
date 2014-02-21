<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "login";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <link href="css/localizacao.css" rel="stylesheet" type="text/css">
	<link href="css/formularios.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
		$(document).ready(function(){
			$('.btRecupera').click(function(){
				$('#frameOverlay, #contentFrame').fadeIn();
			});
			$('.closeOverlay, #frameOverlay').click(function(){
				$('#frameOverlay, #contentFrame').fadeOut();
			})
			<?php
				if($_SESSION["envio_cadastro_sucesso"] != ""){
				?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_sucesso"><?php echo $_SESSION["envio_cadastro_sucesso"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
                <?php
				}
				if($_SESSION["segurancaLogin"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["segurancaLogin"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_user_login"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_user_login"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
			?>
		});
    </script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="login">
            	<div class="contentLeft">
                    <h2 class="proxima">Área Restrita</h2>
                    <span class="proxima txtLegenda">Por favor, insira nos campos abaixo seu e-mail e senha para acessar a Área Restrita do site:</span>
                    <form id="form-login" action="login-envia.php" method="post">
                        <div class="contentForm formLogin">
                            <ul>
                                <li>
                                    <label for="email">Email: <span class="requerido">*</span></label>
                                    <div>
                                        <input type="text" id="email" name="email" class="email" value="" />
                                    </div>
                                </li>
                                <li>
                                    <label for="senha">Senha: <span class="requerido">*</span></label>
                                    <div>
                                        <input type="password" id="senha" name="senha" class="senha" value="" />
                                    </div>
                                </li>
                                <li class="li-inf-requerido">
                                    <span class="span-inf-requerido">(*) Campos obrigatórios</span>
                                </li>
                                <li class="li-bt-envia">
                                	<input type="hidden" name="segurancaLogin" id="segurancaLogin" value="" />
                                    <button type="submit" class="bt-envia proximaShadow bt-envia-entrar"><strong>ENTRAR</strong></button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="contentRight">
                	<h2 class="proxima">Esqueceu sua Senha?</h2>
                    <span class="proxima txtLegenda">Por favor, clique no botão abaixo digite seu email e sua senha será enviada para o seu e-mail em alguns instantes.</span>
                    <br />
                    <div class="btRecupera proximaShadow btEnvia"><strong>RECUPERAR</strong></div>
                    <div class="itensCadastrar">
                        <h2 class="proxima">Quero me Cadastrar</h2>
                        <span class="proxima txtLegenda">Não possui cadastro? Clique no botão abaixo para preencher nosso formulário:</span>
                        <a href="area-restrita-cadastro.php" class="containerLink proximaShadow"><strong>CADASTRAR</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
    <div id="frameOverlay"></div>
    <div id="contentFrame">
    	<span class="closeOverlay">fechar</span>
    	<iframe id="frame-esqueci-senha" src="esqueci-senha.php" width="600" height="200"></iframe>
    </div>
</body>
</html>