<?php
$strTableName="laboratorio";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="laboratorio";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$gsqlFrom="FROM laboratorio";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/laboratorio_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_laboratorio;
$eventObj = &$tableEvents["laboratorio"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>