<?php
	$pag = "contato";
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
</html>
<body class="nutricao-celular">
    
    <?php include("includes/navbar-top.php"); ?>
    
    <?php include("includes/navtopo-logo.php"); ?>
    
    <?php include("includes/navmenu-top.php"); ?>
    
    <div class="container-fluid">
    	<div class="container-fluid-bg-internas"></div>
        <div class="container-fluid-bg-internas-contato"></div>
        	<div class="hero-unit hero-unit-internas">
            	<div class="container container-internas container-margin-bottom">
                   	<div class="row-fluid">
                    	<div class="span4">
                            <h3>CONTATO</h3>
                            <form action="" method="" id="form-contato" name="form-contato">
                                <label for="txt-nome">*Nome</label>
                                <input type="text" name="txt-nome" id="txt-nome" required="required">
                                <label for="txt-email">*E-mail</label>
                                <input type="text" name="txt-email" id="txt-email" required="required">
                                <label for="txt-msg">*Mensagem</label>
                                <textarea name="txt-msg" id="txt-msg" cols="30" rows="10"></textarea>
                                <p>* Campos de preenchimento obrigatório.</p>
                                <div class="btn-group span12">
                                    <input type="submit" name="btn-Enviar" value="Enviar" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                   
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