<?php
$tdataorcamento=array();
	$tdataorcamento[".NumberOfChars"]=80; 
	$tdataorcamento[".ShortName"]="orcamento";
	$tdataorcamento[".OwnerID"]="";
	$tdataorcamento[".OriginalTable"]="orcamento";


	
//	field labels
$fieldLabelsorcamento = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsorcamento["Portuguese(Brazil)"]=array();
	$fieldToolTipsorcamento["Portuguese(Brazil)"]=array();
	$fieldLabelsorcamento["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["endereco"] = "Endereço";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["endereco"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["telefone"] = "Telefone";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["receita"] = "Receita";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["receita"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["mensagem"] = "Mensagem";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["mensagem"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["respondido"] = "Respondido";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["respondido"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsorcamento["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsorcamento["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsorcamento["Portuguese(Brazil)"])){
		$tdataorcamento[".isUseToolTips"]=true;
	}
}


	
	$tdataorcamento[".NCSearch"]=true;

	

$tdataorcamento[".shortTableName"] = "orcamento";
$tdataorcamento[".nSecOptions"] = 0;
$tdataorcamento[".recsPerRowList"] = 1;	
$tdataorcamento[".tableGroupBy"] = "0";
$tdataorcamento[".mainTableOwnerID"] = "";
$tdataorcamento[".moveNext"] = 1;




$tdataorcamento[".showAddInPopup"] = false;

$tdataorcamento[".showEditInPopup"] = false;

$tdataorcamento[".showViewInPopup"] = false;


$tdataorcamento[".fieldsForRegister"] = array();

$tdataorcamento[".listAjax"] = false;

	$tdataorcamento[".audit"] = false;

	$tdataorcamento[".locking"] = false;
	
$tdataorcamento[".listIcons"] = true;
$tdataorcamento[".inlineEdit"] = true;
$tdataorcamento[".view"] = true;



$tdataorcamento[".delete"] = true;

$tdataorcamento[".showSimpleSearchOptions"] = false;

$tdataorcamento[".showSearchPanel"] = true;


$tdataorcamento[".isUseAjaxSuggest"] = true;

$tdataorcamento[".rowHighlite"] = true;


// button handlers file names

$tdataorcamento[".addPageEvents"] = false;

$tdataorcamento[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataorcamento[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataorcamento[".isUseTimeForSearch"] = false;

$tdataorcamento[".isUseiBox"] = false;




$tdataorcamento[".isUseInlineEdit"] = true;
$tdataorcamento[".isUseInlineJs"] = $tdataorcamento[".isUseInlineAdd"] || $tdataorcamento[".isUseInlineEdit"];

$tdataorcamento[".allSearchFields"] = array();

$tdataorcamento[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "id";	
}
$tdataorcamento[".globSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "nome";	
}
$tdataorcamento[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "email";	
}
$tdataorcamento[".globSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "endereco";	
}
$tdataorcamento[".globSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "cidade";	
}
$tdataorcamento[".globSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "estado";	
}
$tdataorcamento[".globSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "telefone";	
}
$tdataorcamento[".globSearchFields"][] = "receita";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("receita", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "receita";	
}
$tdataorcamento[".globSearchFields"][] = "mensagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("mensagem", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "mensagem";	
}
$tdataorcamento[".globSearchFields"][] = "respondido";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("respondido", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "respondido";	
}
$tdataorcamento[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "excluir";	
}
$tdataorcamento[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataorcamento[".allSearchFields"]))
{
	$tdataorcamento[".allSearchFields"][] = "data";	
}


$tdataorcamento[".googleLikeFields"][] = "id";
$tdataorcamento[".googleLikeFields"][] = "nome";
$tdataorcamento[".googleLikeFields"][] = "email";
$tdataorcamento[".googleLikeFields"][] = "endereco";
$tdataorcamento[".googleLikeFields"][] = "cidade";
$tdataorcamento[".googleLikeFields"][] = "estado";
$tdataorcamento[".googleLikeFields"][] = "telefone";
$tdataorcamento[".googleLikeFields"][] = "receita";
$tdataorcamento[".googleLikeFields"][] = "mensagem";
$tdataorcamento[".googleLikeFields"][] = "respondido";
$tdataorcamento[".googleLikeFields"][] = "excluir";
$tdataorcamento[".googleLikeFields"][] = "data";



$tdataorcamento[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "id";	
}
$tdataorcamento[".advSearchFields"][] = "nome";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("nome", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "nome";	
}
$tdataorcamento[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "email";	
}
$tdataorcamento[".advSearchFields"][] = "endereco";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("endereco", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "endereco";	
}
$tdataorcamento[".advSearchFields"][] = "cidade";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("cidade", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "cidade";	
}
$tdataorcamento[".advSearchFields"][] = "estado";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("estado", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "estado";	
}
$tdataorcamento[".advSearchFields"][] = "telefone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("telefone", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "telefone";	
}
$tdataorcamento[".advSearchFields"][] = "receita";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("receita", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "receita";	
}
$tdataorcamento[".advSearchFields"][] = "mensagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("mensagem", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "mensagem";	
}
$tdataorcamento[".advSearchFields"][] = "respondido";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("respondido", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "respondido";	
}
$tdataorcamento[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "excluir";	
}
$tdataorcamento[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataorcamento[".allSearchFields"])) 
{
	$tdataorcamento[".allSearchFields"][] = "data";	
}

$tdataorcamento[".isTableType"] = "list";


	

$tdataorcamento[".isDisplayLoading"] = true;

$tdataorcamento[".isResizeColumns"] = false;





$tdataorcamento[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataorcamento[".strOrderBy"] = $gstrOrderBy;
	
$tdataorcamento[".orderindexes"] = array();

$tdataorcamento[".sqlHead"] = "SELECT id,  nome,  email,  endereco,  cidade,  estado,  telefone,  receita,  mensagem,  respondido,  excluir,  `data`";
$tdataorcamento[".sqlFrom"] = "FROM orcamento";
$tdataorcamento[".sqlWhereExpr"] = "";
$tdataorcamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorcamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorcamento[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataorcamento[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["id"]=$fdata;
//	nome
	$fdata = array();
	$fdata["strName"] = "nome";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["nome"]=$fdata;
//	email
	$fdata = array();
	$fdata["strName"] = "email";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["email"]=$fdata;
//	endereco
	$fdata = array();
	$fdata["strName"] = "endereco";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["endereco"]=$fdata;
//	cidade
	$fdata = array();
	$fdata["strName"] = "cidade";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["cidade"]=$fdata;
//	estado
	$fdata = array();
	$fdata["strName"] = "estado";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["estado"]=$fdata;
//	telefone
	$fdata = array();
	$fdata["strName"] = "telefone";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["telefone"]=$fdata;
//	receita
	$fdata = array();
	$fdata["strName"] = "receita";
	$fdata["ownerTable"] = "orcamento";
		$fdata["Label"]="Receita"; 
	
		
		$fdata["LinkPrefix"]="uploads/"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "Document Download";
	
		
		
		
		
		
	$fdata["GoodName"]= "receita";
	
		$fdata["FullName"]= "receita";
	
		
		
		
		
		
			$fdata["UploadFolder"]="uploads/"; 
		$fdata["Index"]= 8;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataorcamento["receita"]=$fdata;
//	mensagem
	$fdata = array();
	$fdata["strName"] = "mensagem";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["mensagem"]=$fdata;
//	respondido
	$fdata = array();
	$fdata["strName"] = "respondido";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["respondido"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "orcamento";
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
	
		
				
		
		
		
			$tdataorcamento["data"]=$fdata;

	
$tables_data["orcamento"]=&$tdataorcamento;
$field_labels["orcamento"] = &$fieldLabelsorcamento;
$fieldToolTips["orcamento"] = &$fieldToolTipsorcamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["orcamento"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["orcamento"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nome,  email,  endereco,  cidade,  estado,  telefone,  receita,  mensagem,  respondido,  excluir,  `data`";
$proto0["m_strFrom"] = "FROM orcamento";
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
	"m_strTable" => "orcamento"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "orcamento"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "orcamento"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco",
	"m_strTable" => "orcamento"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "orcamento"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "orcamento"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "orcamento"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "receita",
	"m_strTable" => "orcamento"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "mensagem",
	"m_strTable" => "orcamento"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "respondido",
	"m_strTable" => "orcamento"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "orcamento"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "orcamento"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "orcamento";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "nome";
$proto30["m_columns"][] = "email";
$proto30["m_columns"][] = "endereco";
$proto30["m_columns"][] = "cidade";
$proto30["m_columns"][] = "estado";
$proto30["m_columns"][] = "telefone";
$proto30["m_columns"][] = "receita";
$proto30["m_columns"][] = "mensagem";
$proto30["m_columns"][] = "respondido";
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

$queryData_orcamento = $obj;
$tdataorcamento[".sqlquery"] = $queryData_orcamento;

include(getabspath("include/orcamento_events.php"));
$tableEvents["orcamento"] = new eventclass_orcamento;

?>
