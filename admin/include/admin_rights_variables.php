<?php
$strTableName="admin_rights";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="farmatech_ugrights";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT TableName,   GroupID,   AccessMask";
$gsqlFrom="FROM farmatech_ugrights";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/admin_rights_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_admin_rights;
$eventObj = &$tableEvents["admin_rights"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>