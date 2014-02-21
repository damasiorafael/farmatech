<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "area-restrita";
	if($_SESSION["usuario_logado"] == 1){
		$sql_confere = "SELECT *
					FROM
					 `area-restrita-users`
					WHERE
					  (`area-restrita-users`.email = '".$_SESSION["usuario"]."')";
		$query_confere = mysql_query($sql_confere);
		$num_confere = mysql_num_rows($query_confere);
		$row_confere = mysql_fetch_array($query_confere);
		$id_user = $row_confere["id"];
		if($num_confere < 1){
?>
			<script>
                window.location='login.php';
            </script>
<?php
		} else {
			$user = strtoupper($row_confere["nome"]);
		}
	} else {
?>
			<script>
                window.location='login.php';
            </script>
<?php
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <script type="text/javascript">
		$(document).ready(function(){
			$('#arquivos-baixar li:odd, #arquivos-baixar-exclusivos li:odd').css('float', 'right');
			$('#trocaSenha').click(function(){
				$('#frameOverlay, #contentFrame').fadeIn();
			});
			$('.closeOverlay, #frameOverlay').click(function(){
				$('#frameOverlay, #contentFrame').fadeOut();
			})
		});
    </script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="area-restrita" class="interna">
            	<h2 class="proxima">Área Restrita</h2>
                <div id="container-restrita">
                	<div class="itens-restrita topo-restrita">
                    	<div class="inf-user">
                        	<span class="msg-bemvindo proxima">Seja bem vindo</span>
                            <span class="nome-user proxima"><?php echo $user; ?></span>
                        </div>
                        <div class="opc-sistema">
                        	<span class="link-troca-senha">
                            	<a href="#topo" id="trocaSenha" title="Trocar Senha" class="proxima">Troca Senha</a>
                            </span>
                            <span class="link-sair">
                            	<a href="sair.php" title="Sair" class="proxima">Sair</a>
                            </span>
                        </div>
                    </div>
                    <?php
						$sql_arquivos = "SELECT
											`area-restrita`.arquivo,
											`area-restrita`.data
										FROM
											`area-restrita`
										WHERE
											`area-restrita`.exclusivo =  '0' AND
											`area-restrita`.ativo =  '1' AND
											`area-restrita`.excluir =  '0'
										ORDER BY
											`area-restrita`.data ASC";
						$query_arquivos = mysql_query($sql_arquivos);
						$num_arquivos = mysql_num_rows($query_arquivos);
						//$row_arquivos = mysql_fetch_array($query_arquivos);
						if($num_arquivos > 0){
					?>
                            <div class="itens-restrita titulo-restrita">
                                <h3 class="proxima">ARQUIVOS PARA BAIXAR</h3>
                            </div>
                            <div class="itens-restrita conteudo-restrita">
                                <ul id="arquivos-baixar">
                                    <?php
                                        while($row_arquivos = mysql_fetch_array($query_arquivos)){
                                    ?>
                                            <li>
                                                <div class="item-download img-down">
                                                    <img src="img/bgDoc.jpg" width="50" height="35" alt="Formulário.pdf" />
                                                </div>
                                                <div class="item-download nome-down">
                                                    <span class="nome-arquivo proxima"><?php echo limita_nome_arquivo($row_arquivos["arquivo"]); ?></span>
                                                    <span class="tamanho-arquivo proxima">(<?php echo ajusta_tamanho("admin/uploads/".$row_arquivos["arquivo"]); ?>MB)</span>
                                                    <span class="data-arquivo proxima">data: <?php echo converte_data($row_arquivos["data"]); ?></span>
                                                </div>
                                                <div class="item-download bt-down">
                                                    <a href="down.php?id=<?php echo $row_arquivos["arquivo"]; ?>" title="Baixar arquivo <?php echo $row_arquivos["arquivo"]; ?>" class="proximaShadow">DOWNLOAD</a>
                                                </div>
                                            </li>
                                    <?php } ?>
                                </ul>
                    <?php
						}
						$sql_exclusivos = "SELECT
											`area-restrita`.arquivo,
											`area-restrita`.data
										FROM
											`area-restrita`
										WHERE
											`area-restrita`.exclusivo = '1' AND
											`area-restrita`.ativo = '1' AND
											`area-restrita`.excluir = '0' AND
											`area-restrita`.usuario = '$id_user'
										ORDER BY
											`area-restrita`.data ASC";
						$query_exclusivos = mysql_query($sql_exclusivos);
						$num_exclusivos = mysql_num_rows($query_exclusivos);
						//$row_exclusivos = mysql_fetch_array($query_exclusivos);
						if($num_exclusivos > 0){
					?>
                        <div class="itens-restrita titulo-restrita">
                            <h3 class="proxima">ARQUIVOS EXCLUSIVOS</h3>
                        </div>
                        <ul id="arquivos-baixar-exclusivos">
                        	<?php
								while($row_exclusivos = mysql_fetch_array($query_exclusivos)){
							?>
                                    <li>
                                        <div class="item-download img-down">
                                            <img src="img/bgDoc.jpg" width="50" height="35" alt="Formulário.pdf" />
                                        </div>
                                        <div class="item-download nome-down">
                                            <span class="nome-arquivo proxima"><?php echo limita_nome_arquivo($row_exclusivos["arquivo"]); ?></span>
                                            <span class="tamanho-arquivo proxima">(<?php echo ajusta_tamanho("admin/uploads/".$row_exclusivos["arquivo"]); ?>MB)</span>
                                            <span class="data-arquivo proxima">data: <?php echo converte_data($row_exclusivos["data"]); ?></span>
                                        </div>
                                        <div class="item-download bt-down">
                                            <a href="down.php?id=<?php echo $row_exclusivos["arquivo"]; ?>" title="Baixar arquivo <?php echo $row_exclusivos["arquivo"]; ?>" class="proximaShadow">DOWNLOAD</a>
                                        </div>
                                    </li>
                            <?php } ?>
                        </ul>
                    <?php 
						}
					?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
    <div id="frameOverlay"></div>
    <div id="contentFrame">
    	<span class="closeOverlay">fechar</span>
    	<iframe id="frame-trocar-senha" src="trocar-senha.php?id_user=<?php echo $id_user; ?>" width="600" height="300"></iframe>
    </div>
</body>
</html>