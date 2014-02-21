<?php
$strTableName="servicos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="servicos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  titulo,  img_destaque,  img_interna,  conteudo,  destaque_home,  ativo,  excluir,  `data`";
$gsqlFrom="FROM servicos";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/servicos_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_servicos;
$eventObj = &$tableEvents["servicos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>