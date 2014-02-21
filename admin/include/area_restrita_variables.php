<?php
$strTableName="area-restrita";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="area-restrita";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  arquivo,  exclusivo,  usuario,  ativo,  excluir,  `data`";
$gsqlFrom="FROM `area-restrita`";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/area_restrita_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_area_restrita;
$eventObj = &$tableEvents["area-restrita"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>