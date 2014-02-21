<?php
$strTableName="admin_members";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="users";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$gsqlFrom="FROM users";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/admin_members_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_admin_members;
$eventObj = &$tableEvents["admin_members"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>