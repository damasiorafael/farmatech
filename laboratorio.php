<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "laboratorio";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <link href="css/localizacao.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
		$(document).ready(function(){});
    </script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="laboratorio">
            	<h2 class="proxima">Laboratório</h2>
                <?php
					$i = 0;
					$sql_laboratorio = "SELECT
										laboratorio.conteudo,
										laboratorio.foto
									FROM
										laboratorio
									WHERE
										laboratorio.ativo =  '1' AND
										laboratorio.excluir =  '0'
									ORDER BY
										laboratorio.id
									ASC";
					$query_laboratorio = mysql_query($sql_laboratorio);
					while($row_laboratorio = mysql_fetch_array($query_laboratorio)){
				?>
                	<div class="item-laboratorio itemlab-<?= $i; ?>">
                        <span class="txtLegenda legenda-<?= $i; ?>"><?php echo $row_laboratorio["conteudo"]; ?></span>
                        <p class="imagem-<?= $i; ?>">
                        	<img width="548" height="383" class="foto-<?= $i; ?>" src="admin/uploads/<?php echo $row_laboratorio["foto"]; ?>" alt="A Empresa" />
                        </p>
                    </div>
                <?php
						$i++;
					}
				?>
                <div id="laboratorio-miniaturas">
					<?php
                        $j = 0;
                        $sql_laboratorio_miniatura = "
                                        SELECT
                                            laboratorio.foto
                                        FROM
                                            laboratorio
                                        WHERE
                                            laboratorio.ativo =  '1' AND
                                            laboratorio.excluir =  '0'
                                        ORDER BY
                                            laboratorio.id
                                        ASC";
                        $query_laboratorio_miniatura = mysql_query($sql_laboratorio_miniatura);
                        while($row_laboratorio_miniatura = mysql_fetch_array($query_laboratorio_miniatura)){
                    ?>
                        <div class="item-miniatura miniatura-<?= $j; ?>">
                            <img width="135" height="95" class="foto-<?= $j; ?>" src="admin/uploads/<?php echo $row_laboratorio_miniatura["foto"]; ?>" alt="Laboratório" />
                        </div>
                    <?php
                            $j++;
                        }
                    ?>
                </div>
                <span class="legenda-fotos-instrucao">Clique na foto para amplicar</span>
            </div>
            <?php include("inc/box-localizacao.php"); ?>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
</body>
</html>