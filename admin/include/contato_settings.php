<?php
$tdatacontato=array();
	$tdatacontato[".NumberOfChars"]=80; 
	$tdatacontato[".ShortName"]="contato";
	$tdatacontato[".OwnerID"]="";
	$tdatacontato[".OriginalTable"]="contato";


	
//	field labels
$fieldLabelscontato = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscontato["Portuguese(Brazil)"]=array();
	$fieldToolTipscontato["Portuguese(Brazil)"]=array();
	$fieldLabelscontato["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipscontato["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipscontato["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipscontato["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["endereco"] = "Endereço";
	$fieldToolTipscontato["Portuguese(Brazil)"]["endereco"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipscontato["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipscontato["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["telefone"] = "Telefone";
	$fieldToolTipscontato["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["assunto"] = "Assunto";
	$fieldToolTipscontato["Portuguese(Brazil)"]["assunto"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["mensagem"] = "Mensagem";
	$fieldToolTipscontato["Portuguese(Brazil)"]["mensagem"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["respondido"] = "Respondido";
	$fieldToolTipscontato["Portuguese(Brazil)"]["respondido"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipscontato["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelscontato["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipscontato["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipscontato["Portuguese(Brazil)"])){
		$tdatacontato[".isUseToolTips"]=true;
	}
}


	
	$tdatacontato[".NCSearch"]=true;

	

$tdatacontato[".shortTableName"] = "contato";
$tdatacontato[".nSecOptions"] = 0;
$tdatacontato[".recsPerRowList"] = 1;	
$tdatacontato[".tableGroupBy"] = "0";
$tdatacontato[".mainTableOwnerID"] = "";
$tdatacontato[".moveNext"] = 1;




$tdatacontato[".showAddInPopup"] = false;

$tdatacontato[".showEditInPopup"] = false;

$tdatacontato[".showViewInPopup"] = false;


$tdatacontato[".fieldsForRegister"] = array();

$tdatacontato[".listAjax"] = false;

	$tdatacontato[".audit"] = false;

	$tdatacontato[".locking"] = false;
	
$tdatacontato[".listIcons"] = true;
$tdatacontato[".inlineEdit"] = true;
$tdatacontato[".view"] = true;




$tdatacontato[".showSimpleSearchOptions"] = false;

$tdatacontato[".showSearchPanel"] = true;


$tdatacontato[".isUseAjaxSuggest"] = true;

$tdatacontato[".rowHighlite"] = true;


// button handlers file names

$tdatacontato[".addPageEvents"] = false;

$tdatacontato[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdatacontato[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatacontato[".isUseTimeForSearch"] = false;

$tdatacontato[".isUseiBox"] = false;




$tdatacontato[".isUseInlineEdit"] = true;
$tdatacontato[".isUseInlineJs"] = $tdatacontato[".isUseInlineAdd"] || $tdatacontato[".isUseInlineEdit"];

$tdatacontato[".allSearchFields"] = array();

$tdatacontato[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "id";	
}
$tdatacontato[".globSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "nome";	
}
$tdatacontato[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "email";	
}
$tdatacontato[".globSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "endereco";	
}
$tdatacontato[".globSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "cidade";	
}
$tdatacontato[".globSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "estado";	
}
$tdatacontato[".globSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "telefone";	
}
$tdatacontato[".globSearchFields"][] = "assunto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("assunto", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "assunto";	
}
$tdatacontato[".globSearchFields"][] = "mensagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("mensagem", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "mensagem";	
}
$tdatacontato[".globSearchFields"][] = "respondido";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("respondido", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "respondido";	
}
$tdatacontato[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "excluir";	
}
$tdatacontato[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatacontato[".allSearchFields"]))
{
	$tdatacontato[".allSearchFields"][] = "data";	
}


$tdatacontato[".googleLikeFields"][] = "id";
$tdatacontato[".googleLikeFields"][] = "nome";
$tdatacontato[".googleLikeFields"][] = "email";
$tdatacontato[".googleLikeFields"][] = "endereco";
$tdatacontato[".googleLikeFields"][] = "cidade";
$tdatacontato[".googleLikeFields"][] = "estado";
$tdatacontato[".googleLikeFields"][] = "telefone";
$tdatacontato[".googleLikeFields"][] = "assunto";
$tdatacontato[".googleLikeFields"][] = "mensagem";
$tdatacontato[".googleLikeFields"][] = "respondido";
$tdatacontato[".googleLikeFields"][] = "excluir";
$tdatacontato[".googleLikeFields"][] = "data";



$tdatacontato[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "id";	
}
$tdatacontato[".advSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "nome";	
}
$tdatacontato[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "email";	
}
$tdatacontato[".advSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "endereco";	
}
$tdatacontato[".advSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "cidade";	
}
$tdatacontato[".advSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "estado";	
}
$tdatacontato[".advSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "telefone";	
}
$tdatacontato[".advSearchFields"][] = "assunto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("assunto", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "assunto";	
}
$tdatacontato[".advSearchFields"][] = "mensagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("mensagem", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "mensagem";	
}
$tdatacontato[".advSearchFields"][] = "respondido";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("respondido", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "respondido";	
}
$tdatacontato[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "excluir";	
}
$tdatacontato[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatacontato[".allSearchFields"])) 
{
	$tdatacontato[".allSearchFields"][] = "data";	
}

$tdatacontato[".isTableType"] = "list";


	

$tdatacontato[".isDisplayLoading"] = true;

$tdatacontato[".isResizeColumns"] = false;





$tdatacontato[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatacontato[".strOrderBy"] = $gstrOrderBy;
	
$tdatacontato[".orderindexes"] = array();

$tdatacontato[".sqlHead"] = "SELECT id,  nome,  email,  endereco,  cidade,  estado,  telefone,  assunto,  mensagem,  respondido,  excluir,  `data`";
$tdatacontato[".sqlFrom"] = "FROM contato";
$tdatacontato[".sqlWhereExpr"] = "";
$tdatacontato[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontato[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdatacontato[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "contato";
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
	
		
				
		
		
		
			$tdatacontato["id"]=$fdata;
//	nome
	$fdata = array();
	$fdata["strName"] = "nome";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Nome"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "nome";
	
		$fdata["FullName"]= "nome";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["nome"]=$fdata;
//	email
	$fdata = array();
	$fdata["strName"] = "email";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Email"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "email";
	
		$fdata["FullName"]= "email";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["email"]=$fdata;
//	endereco
	$fdata = array();
	$fdata["strName"] = "endereco";
	$fdata["ownerTable"] = "contato";
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
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["endereco"]=$fdata;
//	cidade
	$fdata = array();
	$fdata["strName"] = "cidade";
	$fdata["ownerTable"] = "contato";
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
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["cidade"]=$fdata;
//	estado
	$fdata = array();
	$fdata["strName"] = "estado";
	$fdata["ownerTable"] = "contato";
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
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["estado"]=$fdata;
//	telefone
	$fdata = array();
	$fdata["strName"] = "telefone";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Telefone"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "telefone";
	
		$fdata["FullName"]= "telefone";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["telefone"]=$fdata;
//	assunto
	$fdata = array();
	$fdata["strName"] = "assunto";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Assunto"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "assunto";
	
		$fdata["FullName"]= "assunto";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["assunto"]=$fdata;
//	mensagem
	$fdata = array();
	$fdata["strName"] = "mensagem";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Mensagem"; 
	
		
		
	$fdata["FieldType"]= 201;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text area";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "mensagem";
	
		$fdata["FullName"]= "mensagem";
	
		
		
		
		
		
				$fdata["Index"]= 9;
			$fdata["EditParams"] = "";
			$fdata["EditParams"].= " rows=100";
		$fdata["nRows"] = 100;
			$fdata["EditParams"].= " cols=200";
		$fdata["nCols"] = 200;
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["mensagem"]=$fdata;
//	respondido
	$fdata = array();
	$fdata["strName"] = "respondido";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Respondido"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "respondido";
	
		$fdata["FullName"]= "respondido";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["respondido"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "contato";
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
	
		
				
		
		
		
			$tdatacontato["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "contato";
		$fdata["Label"]="Data"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "data";
	
		$fdata["FullName"]= "`data`";
	
		
		
		
		
		
				$fdata["Index"]= 12;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatacontato["data"]=$fdata;

	
$tables_data["contato"]=&$tdatacontato;
$field_labels["contato"] = &$fieldLabelscontato;
$fieldToolTips["contato"] = &$fieldToolTipscontato;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contato"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["contato"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto23=array();
$proto23["m_strHead"] = "SELECT";
$proto23["m_strFieldList"] = "id,  nome,  email,  endereco,  cidade,  estado,  telefone,  assunto,  mensagem,  respondido,  excluir,  `data`";
$proto23["m_strFrom"] = "FROM contato";
$proto23["m_strWhere"] = "";
$proto23["m_strOrderBy"] = "";
$proto23["m_strTail"] = "";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = "0";
$proto24["m_inBrackets"] = "0";
$proto24["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto24);

$proto23["m_where"] = $obj;
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = "0";
$proto26["m_inBrackets"] = "0";
$proto26["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto26);

$proto23["m_having"] = $obj;
$proto23["m_fieldlist"] = array();
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "contato"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto23["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "contato"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto23["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "contato"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto23["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco",
	"m_strTable" => "contato"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto23["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "contato"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto23["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "contato"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto23["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "contato"
));

$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto23["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "assunto",
	"m_strTable" => "contato"
));

$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto23["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "mensagem",
	"m_strTable" => "contato"
));

$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto23["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "respondido",
	"m_strTable" => "contato"
));

$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto23["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "contato"
));

$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto23["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "contato"
));

$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto23["m_fieldlist"][]=$obj;
$proto23["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "contato";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "nome";
$proto53["m_columns"][] = "email";
$proto53["m_columns"][] = "endereco";
$proto53["m_columns"][] = "cidade";
$proto53["m_columns"][] = "estado";
$proto53["m_columns"][] = "telefone";
$proto53["m_columns"][] = "assunto";
$proto53["m_columns"][] = "mensagem";
$proto53["m_columns"][] = "respondido";
$proto53["m_columns"][] = "excluir";
$proto53["m_columns"][] = "data";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_alias"] = "";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = "0";
$proto54["m_inBrackets"] = "0";
$proto54["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto23["m_fromlist"][]=$obj;
$proto23["m_groupby"] = array();
$proto23["m_orderby"] = array();
$obj = new SQLQuery($proto23);

$queryData_contato = $obj;
$tdatacontato[".sqlquery"] = $queryData_contato;

include(getabspath("include/contato_events.php"));
$tableEvents["contato"] = new eventclass_contato;

?>
