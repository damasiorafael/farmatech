<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `usuario` ";
$gsqlFrom="from `users`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM farmatech_ugrights ";
$gstrSQL = gSQLWhere("");


if(!@$_SESSION["UserID"])
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."Você não tem permissão para acessar esta tabela"." <a href=\"login.php\">"."Voltar à página de Login"."</a></p>";
	return;
}

include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');
$xt = new Xtempl();



$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$nonAdminTablesArr[] = array("banner_home","Banner Home");
$nonAdminTablesRightsArr["banner_home"]=array();
$nonAdminTablesArr[] = array("users","Users");
$nonAdminTablesRightsArr["users"]=array();
$nonAdminTablesArr[] = array("servicos","Servicos");
$nonAdminTablesRightsArr["servicos"]=array();
$nonAdminTablesArr[] = array("empresa","Empresa");
$nonAdminTablesRightsArr["empresa"]=array();
$nonAdminTablesArr[] = array("laboratorio","Laboratorio");
$nonAdminTablesRightsArr["laboratorio"]=array();
$nonAdminTablesArr[] = array("orcamento","Orcamento");
$nonAdminTablesRightsArr["orcamento"]=array();
$nonAdminTablesArr[] = array("contato","Contato");
$nonAdminTablesRightsArr["contato"]=array();
$nonAdminTablesArr[] = array("area-restrita-users","Area-restrita-users");
$nonAdminTablesRightsArr["area-restrita-users"]=array();
$nonAdminTablesArr[] = array("area-restrita","Area-restrita");
$nonAdminTablesRightsArr["area-restrita"]=array();

$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
