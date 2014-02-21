<meta equiv="X-UA-Compatible" content="chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="pt-br" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="revisit-after" content="1 day" />
<meta name="verify-v1" content="" />
<meta name="y_key" content="" />
<meta name="author" content="Rafael Damasio" />
<meta name="copyright" content="Farmatech" />
<meta name="description" content="<?php echo $texto['global']['description']; ?>" />
<meta name="keywords" content="<?php echo $texto['global']['keywords']; ?>" />
<meta name="robots" content="index, follow" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="contents" href="sitemap.xml" type="text/xml" title="Mapa do Site" />
<link rel="stylesheet" type="text/css" media="screen" href="css/geral.css" />
<?php
	if($pag != ""){
?>
		<link rel="stylesheet" type="text/css" media="screen" href="css/<?php echo $pag; ?>.css" />
<?php
	}
?>
<!--[if IE 7]>
<link href="css/geral_ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<!--[if IE 9]>
<link href="css/geral_ie9.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

<?php
	if($pag == "fale-conosco" || $pag == "orcamento"){
?>
		<script type="text/javascript" src="js/jquery.masked-input.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
<?php
	}
?>

<script src="js/scripts.js" type="text/javascript"></script>