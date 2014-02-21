<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "servicos";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <link href="css/localizacao.css" rel="stylesheet" type="text/css">
    <script src="js/servicos.js" type="text/javascript"></script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="servicos">
            	<h2 class="proxima">Serviços</h2>
                <div id="content-servicos">
                	<div id="itens-servicos">
                    	<ul class="titles-servicos">
                        	<?php
								$sql_titulos_servicos = "SELECT
															servicos.titulo
															FROM
															servicos
														 WHERE
															servicos.ativo =  '1' AND
															servicos.excluir =  '0'
														 ORDER BY
															servicos.titulo ASC";
								$query_titulos_servicos = mysql_query($sql_titulos_servicos);
								while($row_titulos_servicos = mysql_fetch_array($query_titulos_servicos)){
							?>
                                    <li>
                                        <span class="uni-servicos" title="<?php echo $row_titulos_servicos["titulo"]; ?>"><?php echo $row_titulos_servicos["titulo"]; ?></span>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="container-servicos">
                    	<ul class="conteudo-servico">
	                        <?php
								$sql_servicos = "SELECT
													servicos.titulo,
													servicos.img_interna,
													servicos.conteudo
												 FROM
													servicos
												 WHERE
													servicos.ativo =  '1' AND
													servicos.excluir =  '0'
												 ORDER BY
													servicos.titulo ASC";
								$query_servicos = mysql_query($sql_servicos);
								$j=1;
								while($row_servicos = mysql_fetch_array($query_servicos)){	
							?>
                                    <li>
                                        <div class="todo-servico servico-<?php echo $j; ?>">
                                        	<h3 class="proxima"><?php echo $row_servicos["titulo"]; ?></h3>
                                        	<?php
												if($row_servicos["img_interna"] != ""){
											?>
                                                    <div class="img-servico img-<?php echo $j; ?>">
                                                        <img src="admin/uploads/<?php echo $row_servicos["img_interna"]; ?>" alt="<?php echo $row_servicos["titulo"]; ?>" class="imagem-do-servico imagem-<?php echo $j; ?>" />
                                                    </div>
                                            <?php
												}
											?>
                                            <p>
                                                <?php echo $row_servicos["conteudo"]; ?>
                                            </p>
                                        </div>
                                    </li>
                            <?php
                            		$j++;
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php include("inc/box-localizacao.php"); ?>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
</body>
</html>