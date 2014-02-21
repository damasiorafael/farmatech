<?php
$tdataarea_restrita_users=array();
	$tdataarea_restrita_users[".NumberOfChars"]=80; 
	$tdataarea_restrita_users[".ShortName"]="area_restrita_users";
	$tdataarea_restrita_users[".OwnerID"]="";
	$tdataarea_restrita_users[".OriginalTable"]="area-restrita-users";


	
//	field labels
$fieldLabelsarea_restrita_users = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]=array();
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]=array();
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["endereco"] = "Endereço";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["endereco"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["cep"] = "Cep";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["telefone"] = "Telefone";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsarea_restrita_users["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsarea_restrita_users["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsarea_restrita_users["Portuguese(Brazil)"])){
		$tdataarea_restrita_users[".isUseToolTips"]=true;
	}
}


	
	$tdataarea_restrita_users[".NCSearch"]=true;

	

$tdataarea_restrita_users[".shortTableName"] = "area_restrita_users";
$tdataarea_restrita_users[".nSecOptions"] = 0;
$tdataarea_restrita_users[".recsPerRowList"] = 1;	
$tdataarea_restrita_users[".tableGroupBy"] = "0";
$tdataarea_restrita_users[".mainTableOwnerID"] = "";
$tdataarea_restrita_users[".moveNext"] = 1;




$tdataarea_restrita_users[".showAddInPopup"] = false;

$tdataarea_restrita_users[".showEditInPopup"] = false;

$tdataarea_restrita_users[".showViewInPopup"] = false;


$tdataarea_restrita_users[".fieldsForRegister"] = array();

$tdataarea_restrita_users[".listAjax"] = false;

	$tdataarea_restrita_users[".audit"] = false;

	$tdataarea_restrita_users[".locking"] = false;
	
$tdataarea_restrita_users[".listIcons"] = true;
$tdataarea_restrita_users[".inlineEdit"] = true;
$tdataarea_restrita_users[".view"] = true;




$tdataarea_restrita_users[".showSimpleSearchOptions"] = false;

$tdataarea_restrita_users[".showSearchPanel"] = true;


$tdataarea_restrita_users[".isUseAjaxSuggest"] = true;

$tdataarea_restrita_users[".rowHighlite"] = true;


// button handlers file names

$tdataarea_restrita_users[".addPageEvents"] = false;

$tdataarea_restrita_users[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataarea_restrita_users[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataarea_restrita_users[".isUseTimeForSearch"] = false;

$tdataarea_restrita_users[".isUseiBox"] = false;


$tdataarea_restrita_users[".useDetailsPreview"] = true;	

$tdataarea_restrita_users[".isUseInlineAdd"] = true;

$tdataarea_restrita_users[".isUseInlineEdit"] = true;
$tdataarea_restrita_users[".isUseInlineJs"] = $tdataarea_restrita_users[".isUseInlineAdd"] || $tdataarea_restrita_users[".isUseInlineEdit"];

$tdataarea_restrita_users[".allSearchFields"] = array();

$tdataarea_restrita_users[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "id";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "nome";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "email";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "endereco";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "cidade";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "estado";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "cep";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cep", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "cep";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "telefone";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "senha";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "ativo";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "excluir";	
}
$tdataarea_restrita_users[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataarea_restrita_users[".allSearchFields"]))
{
	$tdataarea_restrita_users[".allSearchFields"][] = "data";	
}


$tdataarea_restrita_users[".googleLikeFields"][] = "id";
$tdataarea_restrita_users[".googleLikeFields"][] = "nome";
$tdataarea_restrita_users[".googleLikeFields"][] = "email";
$tdataarea_restrita_users[".googleLikeFields"][] = "endereco";
$tdataarea_restrita_users[".googleLikeFields"][] = "cidade";
$tdataarea_restrita_users[".googleLikeFields"][] = "estado";
$tdataarea_restrita_users[".googleLikeFields"][] = "cep";
$tdataarea_restrita_users[".googleLikeFields"][] = "telefone";
$tdataarea_restrita_users[".googleLikeFields"][] = "senha";
$tdataarea_restrita_users[".googleLikeFields"][] = "ativo";
$tdataarea_restrita_users[".googleLikeFields"][] = "excluir";
$tdataarea_restrita_users[".googleLikeFields"][] = "data";



$tdataarea_restrita_users[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "id";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "nome";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "email";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "endereco";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "cidade";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "estado";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "cep";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cep", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "cep";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "telefone";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "senha";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "ativo";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "excluir";	
}
$tdataarea_restrita_users[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataarea_restrita_users[".allSearchFields"])) 
{
	$tdataarea_restrita_users[".allSearchFields"][] = "data";	
}

$tdataarea_restrita_users[".isTableType"] = "list";


	

$tdataarea_restrita_users[".isDisplayLoading"] = true;

$tdataarea_restrita_users[".isResizeColumns"] = false;

	$tdataarea_restrita_users[".subQueriesSupAccess"] = true;




$tdataarea_restrita_users[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataarea_restrita_users[".strOrderBy"] = $gstrOrderBy;
	
$tdataarea_restrita_users[".orderindexes"] = array();

$tdataarea_restrita_users[".sqlHead"] = "SELECT id,  nome,  email,  endereco,  cidade,  estado,  cep,  telefone,  senha,  ativo,  excluir,  `data`";
$tdataarea_restrita_users[".sqlFrom"] = "FROM `area-restrita-users`";
$tdataarea_restrita_users[".sqlWhereExpr"] = "";
$tdataarea_restrita_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarea_restrita_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarea_restrita_users[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataarea_restrita_users[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="ID"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "id";
	
		$fdata["FullName"]= "id";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["id"]=$fdata;
//	nome
	$fdata = array();
	$fdata["strName"] = "nome";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Nome"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "nome";
	
		$fdata["FullName"]= "nome";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
			$fdata["EditParams"].= " size=40";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["nome"]=$fdata;
//	email
	$fdata = array();
	$fdata["strName"] = "email";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Email"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "email";
	
		$fdata["FullName"]= "email";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
			$fdata["EditParams"].= " size=40";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["email"]=$fdata;
//	endereco
	$fdata = array();
	$fdata["strName"] = "endereco";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Endereço"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "endereco";
	
		$fdata["FullName"]= "endereco";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
			$fdata["EditParams"].= " size=50";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["endereco"]=$fdata;
//	cidade
	$fdata = array();
	$fdata["strName"] = "cidade";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Cidade"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "cidade";
	
		$fdata["FullName"]= "cidade";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=100";
			$fdata["EditParams"].= " size=40";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["cidade"]=$fdata;
//	estado
	$fdata = array();
	$fdata["strName"] = "estado";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Estado"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "estado";
	
		$fdata["FullName"]= "estado";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
			$fdata["EditParams"].= " size=30";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["estado"]=$fdata;
//	cep
	$fdata = array();
	$fdata["strName"] = "cep";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Cep"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "cep";
	
		$fdata["FullName"]= "cep";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
			$fdata["EditParams"].= " size=30";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["cep"]=$fdata;
//	telefone
	$fdata = array();
	$fdata["strName"] = "telefone";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Telefone"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "telefone";
	
		$fdata["FullName"]= "telefone";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
			$fdata["EditParams"].= " size=30";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["telefone"]=$fdata;
//	senha
	$fdata = array();
	$fdata["strName"] = "senha";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Senha"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Password";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "senha";
	
		$fdata["FullName"]= "senha";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
			$fdata["EditParams"].= " size=20";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["senha"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "area-restrita-users";
		$fdata["Label"]="Data"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "data";
	
		$fdata["FullName"]= "`data`";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 12;
		$fdata["DateEditType"] = 11; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita_users["data"]=$fdata;

	
$tables_data["area-restrita-users"]=&$tdataarea_restrita_users;
$field_labels["area_restrita_users"] = &$fieldLabelsarea_restrita_users;
$fieldToolTips["area-restrita-users"] = &$fieldToolTipsarea_restrita_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["area-restrita-users"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="area-restrita";
	$detailsTablesData["area-restrita-users"][$dIndex] = array(
		  "dDataSourceTable"=>"area-restrita"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"area_restrita"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT id,  arquivo,  exclusivo,  usuario,  ativo,  excluir,  `data`"	
		, "sqlFrom"=>"FROM `area-restrita`"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["area-restrita-users"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["area-restrita-users"][$dIndex]["detailKeys"][]="usuario";


	
// tables which are master tables for current table (detail)
$masterTablesData["area-restrita-users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nome,  email,  endereco,  cidade,  estado,  cep,  telefone,  senha,  ativo,  excluir,  `data`";
$proto0["m_strFrom"] = "FROM `area-restrita-users`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "area-restrita-users"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "area-restrita-users"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "area-restrita-users"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco",
	"m_strTable" => "area-restrita-users"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "area-restrita-users"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "area-restrita-users"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "area-restrita-users"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "area-restrita-users"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "area-restrita-users"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "area-restrita-users"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "area-restrita-users"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "area-restrita-users"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "area-restrita-users";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "nome";
$proto30["m_columns"][] = "email";
$proto30["m_columns"][] = "endereco";
$proto30["m_columns"][] = "cidade";
$proto30["m_columns"][] = "estado";
$proto30["m_columns"][] = "cep";
$proto30["m_columns"][] = "telefone";
$proto30["m_columns"][] = "senha";
$proto30["m_columns"][] = "ativo";
$proto30["m_columns"][] = "excluir";
$proto30["m_columns"][] = "data";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

$queryData_area_restrita_users = $obj;
$tdataarea_restrita_users[".sqlquery"] = $queryData_area_restrita_users;

include(getabspath("include/area_restrita_users_events.php"));
$tableEvents["area-restrita-users"] = new eventclass_area_restrita_users;

?>
