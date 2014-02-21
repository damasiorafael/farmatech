<?php
$strTableName="contato";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="contato";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,  nome,  email,  endereco,  cidade,  estado,  telefone,  assunto,  mensagem,  respondido,  excluir,  `data`";
$gsqlFrom="FROM contato";
$gsqlWhereExpr="";
$gsqlTail="";

include(getabspath("include/contato_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_contato;
$eventObj = &$tableEvents["contato"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>