<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_members_variables.php");

$gsqlHead="select `usuario` ";
$gsqlFrom="from `users`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT id,   email,   usuario,   senha,   ativo,   excluir,   `data`  FROM users ";
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
	exit();
}


include('include/xtempl.php');
include("classes/searchclause.php");

include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");

include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	

include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/listpage_simple.php');
include('classes/memberspage.php');
$xt = new Xtempl();






$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = MEMBERS_PAGE;
$options['xt'] = &$xt;



$pageObject = ListPage::createListPage($strTableName, $options);

 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



	

?>