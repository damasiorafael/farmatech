<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "orcamento";
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
			$('#orcamento .contentForm ul li:even').addClass('liPar');
			<?php
				if($_SESSION["seguranca"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["seguranca"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_extensao"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_extensao"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_tamanho"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_tamanho"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_qualquer"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_qualquer"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["erro_envio_email"] != ""){
			?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_erro"><?php echo $_SESSION["erro_envio_email"]; ?></p></div>');
					$('#divOverlay').height($('body').height());
					chamaDamBox();
			<?php
				}
				if($_SESSION["envio_orcamento_sucesso"] != ""){
				?>
					$('body').append('<div id="divOverlay"></div><div id="contentOverlay"><span class="closeOverlay">fechar</span><p class="textOverlay envio_sucesso"><?php echo $_SESSION["envio_orcamento_sucesso"]; ?></p></div>');
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
        	<div id="orcamento">
            	<h2 class="proxima">Orçamento</h2>
                <span class="proxima txtLegenda">Preencha os campos abaixo com suas informações pessoais e selecione o arquivo em seu computador com seus pedidos. Lhe atenderemos o mais breve possível.</span>
                <form id="form-orcamento" action="orcamento-envia.php" method="post" enctype="multipart/form-data">
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
                            	<label for="receita">Receita: <span class="requerido">*</span></label>
                              	<div>
                                  	<input type="file" id="receita" name="receita" class="receita" <?php if(isset($_SESSION["receita"])){ ?> value="<?php echo $_SESSION["receita"]; ?>" <?php } ?> />
                              	</div>
                            </li>
                            <li>
                            	<label for="mensagem">Mensagem: <span class="requerido">*</span></label>
                              	<div>
                                  	<textarea id="mensagem" name="mensagem" class="mensagem"><?php if(isset($_SESSION["mensagem"])){ echo $_SESSION["mensagem"]; } ?></textarea>
                              	</div>
                            </li>
                            <li class="li-inf-requerido">
                            	<span class="span-inf-requerido">(*) Campos obrigatórios</span>
                            </li>
                            <li class="li-bt-envia">
                            	<input type="hidden" name="seguranca" id="seguranca" value="" />
                            	<button type="submit" class="bt-envia proximaShadow"><strong>ENVIAR</strong></button>
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