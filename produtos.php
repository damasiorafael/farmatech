<?php
	$pag = "produtos";
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
</html>
<body class="produtos">
    
    <?php include("includes/navbar-top.php"); ?>
    
    <?php include("includes/navtopo-logo.php"); ?>
    
    <?php include("includes/navmenu-top.php"); ?>
    
    <div class="container-fluid">
        <div class="hero-unit hero-unit-internas hero-unit-produtos">
            <div class="container container-internas container-produtos">
                <div class="row-fluid">
                    <ul class="nav-linha-produtos row-fluid">
                    	<li class="linha-blue">
                        	<a href="linha-office.php" class="produtos-linha-office" title="Linha Office">
                            	<div class="add-imagem-linha linha-office">
                                	<div class="title-linha linha-office"></div>
                                    <span class="tx-title-linha">Linha Office</span>
                                    <div class="enfeite-animate"></div>
                                	<img src="img/image1-color.png" alt="Linha Office" />
                                </div>
                                <div class="add-link-linha">
                                	<p class="toggle-color color-azul">Energia, <br>Work <br>Performance</p>
                                    <p class="ver-produtos">Ver Produtos >></p>
                                </div>
                            </a>
                        </li>

                        <li class="linha-green">
                            <a href="weight-management.php" class="produtos-linha-weight" title="Linha Weight Management">
                                <div class="add-imagem-linha linha-weight">
                                    <div class="title-linha linha-weight"></div>
                                    <span class="tx-title-linha">Linha Weight Management</span>
                                    <div class="enfeite-animate"></div>
                                    <img src="img/image2-color.png" alt="Linha Office" />
                                </div>
                                <div class="add-link-linha">
                                    <p class="toggle-color color-verde-escuro">Auto Estima <br>Saúde e <br>Bem Estar</p>
                                    <p class="ver-produtos">Ver Produtos >></p>
                                </div>
                            </a>
                        </li>
                       
                        <li class="linha-orange">
                            <a href="linha-fitness.php" class="produtos-linha-fitness" title="Linha Fitness">
                                <div class="add-imagem-linha linha-fitness">
                                    <div class="title-linha linha-fitness"></div>
                                    <span class="tx-title-linha">Linha Fitness</span>
                                    <div class="enfeite-animate"></div>
                                    <img src="img/image3-color.png" alt="Linha Fitness" />
                                </div>
                                <div class="add-link-linha">
                                    <p class="toggle-color color-laranja">Exercício <br>Desempenho<br>Recuperação</p>
                                    <p class="ver-produtos">Ver Produtos >></p>
                                </div>
                            </a>
                        </li>

                        <li class="linha-purple">
                            <a href="healthy-aging.php" class="produtos-linha-healthy" title="Linha Healthy">
                                <div class="add-imagem-linha linha-healthy">
                                    <div class="title-linha linha-healthy"></div>
                                    <span class="tx-title-linha">Linha Healthy Aging</span>
                                    <div class="enfeite-animate"></div>
                                    <img src="img/image4-color.png" alt="Linha Healthy" />
                                </div>
                                <div class="add-link-linha">
                                    <p class="toggle-color color-roxo">Bem Estar <br>Nutrição Celular<br>Saúde</p>
                                    <p class="ver-produtos">Ver Produtos >></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("includes/rodape.php"); ?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script>
		$('.carousel').carousel({
			interval : 15000
		});
	</script>

</body>