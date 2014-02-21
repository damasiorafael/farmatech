<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "home";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <script src="js/banner-home.js" type="text/javascript"></script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <?php include("inc/banner-home.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div class="boxesHome box box1">
            	<div class="containerBox">
                	<?php
						$sql_servicos = "SELECT
											servicos.img_destaque,
											servicos.conteudo
										 FROM
											servicos
										 WHERE
											servicos.destaque_home =  '1' AND
											servicos.ativo =  '1' AND
											servicos.excluir =  '0'";
						$query_servicos = mysql_query($sql_servicos);
						while($row_servicos = mysql_fetch_array($query_servicos)){
					?>
                				<img src="admin/uploads/<?php echo $row_servicos["img_destaque"]; ?>" alt="Servi�os" />
                                <h2 class="proxima">Servi�os</h2>
                    			<span class="proxima legendaImg"><?php echo limita_caracter($row_servicos["conteudo"], 146); ?></span>
                    <?php } ?>
                </div>
            	<a href="servicos.php" class="containerLink proximaShadow">SAIBA MAIS</a>
            </div>
            <div class="boxesHome box box2">
            	<div class="containerBox">
                	<img src="img/img_home_2.jpg" alt="Or�amento" />
                    <h2 class="proxima">Or�amento</h2>
                    <span class="proxima legendaImg">Fa�a um or�amento online que n�s lhe respondemos o mais breve poss�vel. Aproveite nosso atendimento com entrega gr�tis pra cidade de Londrina.</span>
                </div>
            	<a href="orcamento.php" class="containerLink proximaShadow">FA�A UM OR�AMENTO</a>
            </div>
            <div class="boxesHome box box3">
            	<div class="containerBox">
                	<img src="img/img_home_3.jpg" alt="Contato" />
                    <h2 class="proxima">Contato</h2>
                    <span class="proxima legendaImg">Entre em contato atrav�s do atendimento online, estamos sempre dispostos a lhe oferecer o melhor atendimento e as melhores condi��es.</span>
                </div>
            	<a href="fale-conosco.php" class="containerLink proximaShadow">ENTRE EM CONTATO</a>
            </div>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
</body>
</html>