<?php
	include("inc/config.php");
	include("inc/seo.php");
	$pag = "empresa";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
    <?php include("inc/head.php") ?>
    <title><?php echo $texto['global']['title']; ?></title>
    <link href="css/localizacao.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
		$(document).ready(function(){
			if($('.videoYoutube')[0]){
				var srcSwf,
				hrefDivide = $('.videoYoutube').attr('href').split('=')[1],
				href = hrefDivide.match('&') ? hrefDivide.split('&')[0] : hrefDivide;
				srcSwf = 'http://www.youtube.com/v/'+href;
				
				swfSub = '<object width="548" height="402"><param name="movie" value="'+srcSwf+'?version=3&amp;hl=pt_BR"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="'+srcSwf+'?version=3&amp;hl=pt_BR" type="application/x-shockwave-flash" width="560" height="402" allowscriptaccess="always" allowfullscreen="true"></embed></object>'
				
				$('.videoYoutube').after('<div class="divVideoYoutube">'+swfSub+'</div>');
				$('.videoYoutube').remove();
			}
		});
    </script>
</head>
<body>
	<?php include("inc/topo.php"); ?>
    <div id="conteudo">
    	<div class="containerConteudo">
        	<div id="empresa">
            	<h2 class="proxima">A Empresa</h2>
                <?php
					$sql_empresa = "SELECT
										empresa.conteudo,
										empresa.video,
										empresa.foto
									FROM
										empresa
									WHERE
										empresa.ativo =  '1' AND
										empresa.excluir =  '0'";
					$query_empresa = mysql_query($sql_empresa);
					while($row_empresa = mysql_fetch_array($query_empresa)){
				?>
                		<span class="proxima txtLegenda"><?php echo $row_empresa["conteudo"]; ?></span>
                		<?php
                        	if($row_empresa["video"] != ""){
						?>
								<p>
									<a class="videoYoutube" href="<?php echo $row_empresa["video"]; ?>">Vídeo Institucional</a>
								</p>
						<?php
                        	}
							if($row_empresa["foto"] != ""){
						?>
                                <p>
                                    <img src="admin/uploads/<?php echo $row_empresa["foto"]; ?>" alt="A Empresa" />
                                </p>
                         <?php
                         	} 
					}
				?>
            </div>
            <?php include("inc/box-localizacao.php"); ?>
        </div>
    </div>
    <?php include("inc/rodape.php"); ?>
</body>
</html>