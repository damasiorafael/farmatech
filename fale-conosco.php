 <?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "fale-conosco";
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
			$('#fale-conosco .contentForm ul li:even').addClass('liPar');
			<?php
				if($_SESSION["seguranca"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["seguranca"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_envio_email_contato"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_envio_email_contato"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["envio_contato_sucesso"] != ""){
				?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_sucesso"><?php echo $_SESSION["envio_contato_sucesso"]; ?></p></div>');
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
        	<div id="fale-conosco">
            	<h2 class="proxima">Fale Conosco</h2>
                <span class="proxima txtLegenda">Preencha os campos abaixo com suas informações pessoais e selecione o assunto desejado para entrar em contato. Lhe atenderemos o mais breve possível.</span>
                <form id="form-fale-conosco" action="fale-conosco-envia.php" method="post">
                	<div class="contentForm">
                    	<ul>
                            <li class="liNome">
                                <label for="nome">Nome: <span class="requerido">*</span></label>
                                <div>
                                    <input type="text" id="nome" name="nome" class="nome" <?php if(isset($_SESSION["nome"])){ ?> value="<?php echo $_SESSION["nome"]; ?>" <?php } ?> />
                                </div>
                            </li>
                            <li>
                                <label for="email">Email: <span class="requerido">*</span></label>
                                <div>
                                    <input type="text" id="email" name="email" class="email" <?php if(isset($_SESSION["email"])){ ?> value="<?php echo $_SESSION["email"]; ?>" <?php } ?> />
                                </div>
                            </li>
                            <li>
                                <label for="endereco">Endereço: <span class="requerido">*</span></label>
                                <div>
                                    <input type="text" id="endereco" name="endereco" class="endereco" <?php if(isset($_SESSION["endereco"])){ ?> value="<?php echo $_SESSION["endereco"]; ?>" <?php } ?> />
                                </div>
                            </li>
                            <li>
                                <label for="cidade">Cidade: <span class="requerido">*</span></label>
                                <div>
                                    <input name="cidade" id="cidade" class="cidade" <?php if(isset($_SESSION["cidade"])){ ?> value="<?php echo $_SESSION["cidade"]; ?>" <?php } ?> />
                                </div>
                            </li>
                            <li>
                                <label for="estado">Estado: <span class="requerido">*</span></label>
                                <div class="divEstado">
                                    <select name="estado" id="estado" class="estado"> 
                                        <option value="" <?php if(!isset($_SESSION["estado"])){ ?> selected="selected" <?php } ?>> - Selecione - </option>
                                        <option value="AC" <?php if($_SESSION["estado"] == "AC"){ ?> selected="selected" <?php } ?>>AC - Acre</option>
                                        <option value="AL" <?php if($_SESSION["estado"] == "AL"){ ?> selected="selected" <?php } ?>>AL - Alagoas</option>
                                        <option value="AM" <?php if($_SESSION["estado"] == "AM"){ ?> selected="selected" <?php } ?>>AM - Amazonas</option>
                                        <option value="AP" <?php if($_SESSION["estado"] == "AP"){ ?> selected="selected" <?php } ?>>AP - Amap&aacute;</option>
                                        <option value="BA" <?php if($_SESSION["estado"] == "BA"){ ?> selected="selected" <?php } ?>>BA - Bahia</option>
                                        <option value="CE" <?php if($_SESSION["estado"] == "CE"){ ?> selected="selected" <?php } ?>>CE - Cear&aacute;</option>
                                        <option value="DF" <?php if($_SESSION["estado"] == "DF"){ ?> selected="selected" <?php } ?>>DF - Distrito Federal</option>
                                        <option value="ES" <?php if($_SESSION["estado"] == "ES"){ ?> selected="selected" <?php } ?>>ES - Esp&iacute;rito Santo</option>
                                        <option value="GO" <?php if($_SESSION["estado"] == "GO"){ ?> selected="selected" <?php } ?>>GO - Goi&aacute;s</option>
                                        <option value="MA" <?php if($_SESSION["estado"] == "MA"){ ?> selected="selected" <?php } ?>>MA - Maranh&atilde;o</option>
                                        <option value="MG" <?php if($_SESSION["estado"] == "MG"){ ?> selected="selected" <?php } ?>>MG - Minas Gerais</option>
                                        <option value="MS" <?php if($_SESSION["estado"] == "MS"){ ?> selected="selected" <?php } ?>>MS - Mato Grosso do Sul</option>
                                        <option value="MT" <?php if($_SESSION["estado"] == "MT"){ ?> selected="selected" <?php } ?>>MT - Mato Grosso</option>
                                        <option value="PA" <?php if($_SESSION["estado"] == "PA"){ ?> selected="selected" <?php } ?>>PA - Par&aacute;</option>
                                        <option value="PB" <?php if($_SESSION["estado"] == "PB"){ ?> selected="selected" <?php } ?>>PB - Para&iacute;ba</option>
                                        <option value="PE" <?php if($_SESSION["estado"] == "PE"){ ?> selected="selected" <?php } ?>>PE - Pernambuco</option>
                                        <option value="PI" <?php if($_SESSION["estado"] == "PI"){ ?> selected="selected" <?php } ?>>PI - Piau&iacute;</option>
                                        <option value="PR" <?php if($_SESSION["estado"] == "PR"){ ?> selected="selected" <?php } ?>>PR - Paran&aacute;</option>
                                        <option value="RO" <?php if($_SESSION["estado"] == "RO"){ ?> selected="selected" <?php } ?>>RO - Rond&ocirc;nia</option>
                                        <option value="RJ" <?php if($_SESSION["estado"] == "RJ"){ ?> selected="selected" <?php } ?>>RJ - Rio de Janeiro</option>
                                        <option value="RN" <?php if($_SESSION["estado"] == "RN"){ ?> selected="selected" <?php } ?>>RN - Rio Grande do Norte</option>
                                        <option value="RR" <?php if($_SESSION["estado"] == "RR"){ ?> selected="selected" <?php } ?>>RR - Roraima</option>
                                        <option value="RS" <?php if($_SESSION["estado"] == "RS"){ ?> selected="selected" <?php } ?>>RS - Rio Grande do Sul</option>
                                        <option value="SC" <?php if($_SESSION["estado"] == "SC"){ ?> selected="selected" <?php } ?>>SC - Santa Catarina</option>
                                        <option value="SE" <?php if($_SESSION["estado"] == "SE"){ ?> selected="selected" <?php } ?>>SE - Sergipe</option>
                                        <option value="SP" <?php if($_SESSION["estado"] == "SP"){ ?> selected="selected" <?php } ?>>SP - S&atilde;o Paulo</option>
                                        <option value="TO" <?php if($_SESSION["estado"] == "TO"){ ?> selected="selected" <?php } ?>>TO - Tocantins</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                            	<label for="telefone">Telefone: <span class="requerido">*</span></label>
                              	<div>
                                  	<input type="text" id="telefone" name="telefone" class="telefone" <?php if(isset($_SESSION["telefone"])){ ?> value="<?php echo $_SESSION["telefone"]; ?>" <?php } ?> />
                              	</div>
                            </li>
                            <li>
                                <label for="assunto">Assunto: <span class="requerido">*</span></label>
                                <div class="divAssunto">
                                    <select name="assunto" id="assunto" class="assunto"> 
                                        <option value="" <?php if(!isset($_SESSION["assunto"])){ ?> selected="selected" <?php } ?>> - Selecione - </option>
                                        <option value="AC" <?php if($_SESSION["assunto"] == "Dúvidas"){ ?> selected="selected" <?php } ?>>Dúvidas</option>
                                        <option value="AL" <?php if($_SESSION["assunto"] == "Sugestões"){ ?> selected="selected" <?php } ?>>Sugestões</option>
                                        <option value="AM" <?php if($_SESSION["assunto"] == "Críticas"){ ?> selected="selected" <?php } ?>>Críticas</option>
                                        <option value="AP" <?php if($_SESSION["assunto"] == "Elogios"){ ?> selected="selected" <?php } ?>>Elogios</option>
                                        <option value="BA" <?php if($_SESSION["assunto"] == "Outros"){ ?> selected="selected" <?php } ?>>Outros</option>
                                    </select>
                                </div>
                            </li>
                            <li class="liTextarea">
                                <label for="mensagem">Mensagem: <span class="requerido">*</span></label>
                                <div class="campoTextarea">
                                    <textarea id="mensagem" name="mensagem" class="mensagem"></textarea>
                                    <input name="seguranca" type="hidden" />
                                </div>
                            </li>
                            <li class="li-inf-requerido">
                            	<span class="span-inf-requerido">(*) Campos obrigatórios</span>
                            </li>
                            <li class="li-bt-envia">
                            	<button type="submit" class="bt-envia proximaShadow"><strong>Enviar</strong></button>
                                <input type="hidden" name="seguranca" id="seguranca" value="" />
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <?php include("inc/box-localizacao.php"); ?>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
</body>
</html>