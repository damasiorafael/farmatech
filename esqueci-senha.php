 <?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "esqueci-senha";
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
        	<div id="esqueci-senha">
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
                <form id="form-esqueci-senha" action="esqueci-senha-envia.php" method="post">
                    <div class="contentForm formEsqueciEmail">
                        <ul>
                            <li>
                                <label for="emailEsqueci">Email: <span class="requerido">*</span></label>
                                <div>
                                    <input type="text" id="emailEsqueci" name="emailEsqueci" class="emailEsqueci" value="" />
                                </div>
                            </li>
                            <li class="li-bt-envia">
                                <input type="hidden" name="segurancaEsqueciSenha" id="segurancaEsqueciSenha" value="" />
                                <input type="submit" class="bt-envia proximaShadow" value="RECUPERAR" />
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>