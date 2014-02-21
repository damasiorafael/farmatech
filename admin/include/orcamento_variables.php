<?php
$strTableName="orcamento";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="orcamento";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  nome,  email,  endereco,  cidade,  estado,  telefone,  receita,  mensagem,  respondido,  excluir,  `data`";
$gsqlFrom="FROM orcamento";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/orcamento_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_orcamento;
$eventObj = &$tableEvents["orcamento"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>