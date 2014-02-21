 <?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "trocar-senha";
	$id_user = $_REQUEST["id_user"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
	<link href="css/formularios.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
		$(document).ready(function(){
			$('#esqueci-senha .contentForm ul li:even').addClass('liPar');
			$('.fechaMsg').click(function(){
				$('.msgEsqueciSenha').fadeOut();
			});
		});
    </script>
</head>
<body>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="trocar-senha">
            	<?php
					if($_SESSION["envio_senha_sucesso"] != ""){
				?>
                		<div class="msgEsqueciSenha">
                            <div class="envio_sucesso"><?php echo $_SESSION["envio_senha_sucesso"]; ?></div>
                        </div>
                <?php	
					}
				?>
                <?php
					if($_SESSION["erro_email_esqueci_senha"] != ""){
				?>
                        <div class="msgEsqueciSenha">
                            <div class="envio_erro"><?php echo $_SESSION["erro_email_esqueci_senha"]; ?></div>
                            <span class="fechaMsg">Tentar novamente</span>
                        </div>
				<?php	
    	            }
	            ?>
                <form id="form-trocar-senha" action="trocar-senha-envia.php" method="post">
                    <div class="contentForm formEsqueciEmail">
                        <ul>
                            <li>
                                <label for="novaSenha">Nova senha: <span class="requerido">*</span></label>
                                <div>
                                    <input type="password" id="novaSenha" name="novaSenha" class="novaSenha" value="" />
                                </div>
                            </li>
                            <li>
                                <label for="confirmNovaSenha">Confirme a nova senha: <span class="requerido">*</span></label>
                                <div>
                                    <input type="password" id="confirmNovaSenha" name="confirmNovaSenha" class="confirmNovaSenha" value="" />
                                </div>
                            </li>
                            <li class="li-bt-envia">
                            	<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user; ?>" />
                                <input type="hidden" name="segurancaTrocarSenha" id="segurancaTrocarSenha" value="" />
                                <input type="submit" class="bt-envia proximaShadow" value="TROCAR" />
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>