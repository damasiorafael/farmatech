<?php
$strTableName="empresa";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="empresa";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$gsqlFrom="FROM empresa";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/empresa_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_empresa;
$eventObj = &$tableEvents["empresa"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>