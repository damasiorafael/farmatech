<?php
$strTableName="area-restrita-users";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="area-restrita-users";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  nome,  email,  endereco,  cidade,  estado,  cep,  telefone,  senha,  ativo,  excluir,  `data`";
$gsqlFrom="FROM `area-restrita-users`";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/area_restrita_users_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_area_restrita_users;
$eventObj = &$tableEvents["area-restrita-users"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>