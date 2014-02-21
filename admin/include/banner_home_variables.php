<?php
$strTableName="banner_home";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="banner_home";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  titulo_banner,  imagem,  ativo,  excluir,  `data`";
$gsqlFrom="FROM banner_home";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/banner_home_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_banner_home;
$eventObj = &$tableEvents["banner_home"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>