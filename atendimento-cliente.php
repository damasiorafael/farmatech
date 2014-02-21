<?php
	$pag = "atendimento";
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
</html>
<body class="home">
    
    <?php include("includes/navbar-top.php"); ?>
    
    <?php include("includes/navtopo-logo.php"); ?>
    
    <?php include("includes/navmenu-top.php"); ?>
    
    <div class="container-fluid ">
    	<div class="row-fluid">
        	<div class="hero-unit hero-unit-internas">
            	<div class="container container-internas atendimento">
                	<h2>CENTRAL DE ATENDIMENTO</h2>
                    <i class="icon-email"></i><h3>ATENDIMENTO POR E-MAIL</h3>

                    <p>
                        Preencha os campos abaixo com as informações do comprador e seu pedido para encaminhar aos nossos especialistas: <br>
                        Os campos asterisco(*) são de preenchimento obrigatório.</p>

                    <form action="" name="form-atendimento" id="form-atendimento" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="txtNome" class="col-sm-2 control-label">*Nome:</label> 
                            <div class="col-sm-10">
                                <input type="text" id="txtNome" name="txtNome" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtEmail" class="col-sm-2 control-label">*E-mail:</label> 
                            <div class="col-sm-10">
                                <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtDdd1" class="col-sm-2 control-label">*Telefone 1:</label> 
                            <div class="col-sm-11">
                                <input type="text" id="txtDdd1" name="txtDdd1" class="form-control span2">
                                <input type="text" id="txtTel1" name="txtTel1" class="form-control span6">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtDdd2" class="col-sm-2 control-label">Telefone 2:</label> 
                            <div class="col-sm-11">
                                <input type="text" id="txtDdd2" name="txtDdd2" class="form-control span2">
                                <input type="text" id="txtTel2" name="txtTel2" class="form-control span6">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtCpf" class="col-sm-2 control-label">*CPF:</label> 
                            <div class="col-sm-10">
                                <input type="text" id="txtCpf" name="txtCpf" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtMsg" class="col-sm-2 control-label">*Mensagem:</label> 
                            <div class="col-sm-11">
                                <textarea type="text" id="txtMsg" name="txtMsg" class="form-control"></textarea>
                            </div>
                            <p class=" inline-block marginLeft83">1000 CARACTERES RESTANTES</p>
                        </div>
                        <div class="form-group marginLeft83">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-large">Enviar</button>
                            </div>
                        </div>
                    </form>

                    <i class="icon-tel"></i><h3>ATENDIMENTO POR TELEFONE</h3>

                    <p class="ligue">LIGUE PARA: 11 - 2730-0630</p>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("includes/rodape.php"); ?>
</body>