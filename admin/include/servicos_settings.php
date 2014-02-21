<?php
$tdataservicos=array();
	$tdataservicos[".NumberOfChars"]=80; 
	$tdataservicos[".ShortName"]="servicos";
	$tdataservicos[".OwnerID"]="";
	$tdataservicos[".OriginalTable"]="servicos";


	
//	field labels
$fieldLabelsservicos = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsservicos["Portuguese(Brazil)"]=array();
	$fieldToolTipsservicos["Portuguese(Brazil)"]=array();
	$fieldLabelsservicos["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["titulo"] = "T[itulo";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["titulo"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["img_destaque"] = "Foto Destaque";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["img_destaque"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["img_interna"] = "Foto Interna";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["img_interna"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["conteudo"] = "Conteudo";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["conteudo"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["destaque_home"] = "Destaque Home";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["destaque_home"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsservicos["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsservicos["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsservicos["Portuguese(Brazil)"])){
		$tdataservicos[".isUseToolTips"]=true;
	}
}


	
	$tdataservicos[".NCSearch"]=true;

	

$tdataservicos[".shortTableName"] = "servicos";
$tdataservicos[".nSecOptions"] = 0;
$tdataservicos[".recsPerRowList"] = 1;	
$tdataservicos[".tableGroupBy"] = "0";
$tdataservicos[".mainTableOwnerID"] = "";
$tdataservicos[".moveNext"] = 1;




$tdataservicos[".showAddInPopup"] = false;

$tdataservicos[".showEditInPopup"] = false;

$tdataservicos[".showViewInPopup"] = false;


$tdataservicos[".fieldsForRegister"] = array();

$tdataservicos[".listAjax"] = false;

	$tdataservicos[".audit"] = false;

	$tdataservicos[".locking"] = false;
	
$tdataservicos[".listIcons"] = true;
$tdataservicos[".inlineEdit"] = true;
$tdataservicos[".view"] = true;



$tdataservicos[".delete"] = true;

$tdataservicos[".showSimpleSearchOptions"] = false;

$tdataservicos[".showSearchPanel"] = true;


$tdataservicos[".isUseAjaxSuggest"] = true;

$tdataservicos[".rowHighlite"] = true;


// button handlers file names

$tdataservicos[".addPageEvents"] = false;

$tdataservicos[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataservicos[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataservicos[".isUseTimeForSearch"] = false;

$tdataservicos[".isUseiBox"] = true;

$tdataservicos[".useIbox"] = true;


$tdataservicos[".isUseInlineAdd"] = true;

$tdataservicos[".isUseInlineEdit"] = true;
$tdataservicos[".isUseInlineJs"] = $tdataservicos[".isUseInlineAdd"] || $tdataservicos[".isUseInlineEdit"];

$tdataservicos[".allSearchFields"] = array();

$tdataservicos[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "id";	
}
$tdataservicos[".globSearchFields"][] = "titulo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("titulo", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "titulo";	
}
$tdataservicos[".globSearchFields"][] = "img_destaque";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("img_destaque", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "img_destaque";	
}
$tdataservicos[".globSearchFields"][] = "img_interna";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("img_interna", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "img_interna";	
}
$tdataservicos[".globSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "conteudo";	
}
$tdataservicos[".globSearchFields"][] = "destaque_home";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("destaque_home", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "destaque_home";	
}
$tdataservicos[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "ativo";	
}
$tdataservicos[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "excluir";	
}
$tdataservicos[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataservicos[".allSearchFields"]))
{
	$tdataservicos[".allSearchFields"][] = "data";	
}


$tdataservicos[".googleLikeFields"][] = "id";
$tdataservicos[".googleLikeFields"][] = "titulo";
$tdataservicos[".googleLikeFields"][] = "img_destaque";
$tdataservicos[".googleLikeFields"][] = "img_interna";
$tdataservicos[".googleLikeFields"][] = "conteudo";
$tdataservicos[".googleLikeFields"][] = "destaque_home";
$tdataservicos[".googleLikeFields"][] = "ativo";
$tdataservicos[".googleLikeFields"][] = "excluir";
$tdataservicos[".googleLikeFields"][] = "data";



$tdataservicos[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "id";	
}
$tdataservicos[".advSearchFields"][] = "titulo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("titulo", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "titulo";	
}
$tdataservicos[".advSearchFields"][] = "img_destaque";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("img_destaque", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "img_destaque";	
}
$tdataservicos[".advSearchFields"][] = "img_interna";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("img_interna", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "img_interna";	
}
$tdataservicos[".advSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "conteudo";	
}
$tdataservicos[".advSearchFields"][] = "destaque_home";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("destaque_home", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "destaque_home";	
}
$tdataservicos[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "ativo";	
}
$tdataservicos[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "excluir";	
}
$tdataservicos[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataservicos[".allSearchFields"])) 
{
	$tdataservicos[".allSearchFields"][] = "data";	
}

$tdataservicos[".isTableType"] = "list";


	

$tdataservicos[".isDisplayLoading"] = true;

$tdataservicos[".isResizeColumns"] = false;





$tdataservicos[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataservicos[".strOrderBy"] = $gstrOrderBy;
	
$tdataservicos[".orderindexes"] = array();

$tdataservicos[".sqlHead"] = "SELECT id,  titulo,  img_destaque,  img_interna,  conteudo,  destaque_home,  ativo,  excluir,  `data`";
$tdataservicos[".sqlFrom"] = "FROM servicos";
$tdataservicos[".sqlWhereExpr"] = "";
$tdataservicos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicos[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataservicos[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "servicos";
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
	
		
				
		
		
		
			$tdataservicos["id"]=$fdata;
//	titulo
	$fdata = array();
	$fdata["strName"] = "titulo";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="T[itulo"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "titulo";
	
		$fdata["FullName"]= "titulo";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=65";
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["titulo"]=$fdata;
//	img_destaque
	$fdata = array();
	$fdata["strName"] = "img_destaque";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Foto Destaque"; 
	
		
		$fdata["LinkPrefix"]="uploads/"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = true;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "File-based Image";
	
		
		
			$fdata["ShowThumbnail"]=true; 
	$fdata["StrThumbnail"]="th";
	$fdata["ImageWidth"] = 0;
	$fdata["ImageHeight"] = 0;
	
		
		
	$fdata["GoodName"]= "img_destaque";
	
		$fdata["FullName"]= "img_destaque";
	
		
		
		
		
		
		$fdata["UseTimestamp"]=true; 
		$fdata["UploadFolder"]="uploads/"; 
		$fdata["Index"]= 3;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		$fdata["CreateThumbnail"]=true;
	$fdata["ThumbnailPrefix"]="th";
	
				
		
		
		
			$tdataservicos["img_destaque"]=$fdata;
//	img_interna
	$fdata = array();
	$fdata["strName"] = "img_interna";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Foto Interna"; 
	
		
		$fdata["LinkPrefix"]="uploads/"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = true;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "File-based Image";
	
		
		
			$fdata["ShowThumbnail"]=true; 
	$fdata["StrThumbnail"]="th";
	$fdata["ImageWidth"] = 0;
	$fdata["ImageHeight"] = 0;
	
		
		
	$fdata["GoodName"]= "img_interna";
	
		$fdata["FullName"]= "img_interna";
	
		
		
		
		
		
		$fdata["UseTimestamp"]=true; 
		$fdata["UploadFolder"]="uploads/"; 
		$fdata["Index"]= 4;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		$fdata["CreateThumbnail"]=true;
	$fdata["ThumbnailPrefix"]="th";
	
				
		
		
		
			$tdataservicos["img_interna"]=$fdata;
//	conteudo
	$fdata = array();
	$fdata["strName"] = "conteudo";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Conteudo"; 
	
		
		
	$fdata["FieldType"]= 201;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text area";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "conteudo";
	
		$fdata["FullName"]= "conteudo";
	
		
		
		
		
		
				$fdata["Index"]= 5;
			$fdata["EditParams"] = "";
			$fdata["EditParams"].= " rows=100";
		$fdata["nRows"] = 100;
			$fdata["EditParams"].= " cols=200";
		$fdata["nCols"] = 200;
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["conteudo"]=$fdata;
//	destaque_home
	$fdata = array();
	$fdata["strName"] = "destaque_home";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Destaque Home"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "destaque_home";
	
		$fdata["FullName"]= "destaque_home";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["destaque_home"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 7;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 8;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "servicos";
		$fdata["Label"]="Data"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "data";
	
		$fdata["FullName"]= "`data`";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 9;
		$fdata["DateEditType"] = 11; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataservicos["data"]=$fdata;

	
$tables_data["servicos"]=&$tdataservicos;
$field_labels["servicos"] = &$fieldLabelsservicos;
$fieldToolTips["servicos"] = &$fieldToolTipsservicos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["servicos"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["servicos"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto56=array();
$proto56["m_strHead"] = "SELECT";
$proto56["m_strFieldList"] = "id,  titulo,  img_destaque,  img_interna,  conteudo,  destaque_home,  ativo,  excluir,  `data`";
$proto56["m_strFrom"] = "FROM servicos";
$proto56["m_strWhere"] = "";
$proto56["m_strOrderBy"] = "";
$proto56["m_strTail"] = "";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = "0";
$proto57["m_inBrackets"] = "0";
$proto57["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto57);

$proto56["m_where"] = $obj;
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = "0";
$proto59["m_inBrackets"] = "0";
$proto59["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto59);

$proto56["m_having"] = $obj;
$proto56["m_fieldlist"] = array();
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "servicos"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto56["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "servicos"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto56["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "img_destaque",
	"m_strTable" => "servicos"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto56["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "img_interna",
	"m_strTable" => "servicos"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto56["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "conteudo",
	"m_strTable" => "servicos"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto56["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "destaque_home",
	"m_strTable" => "servicos"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto56["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "servicos"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto56["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "servicos"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto56["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "servicos"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto56["m_fieldlist"][]=$obj;
$proto56["m_fromlist"] = array();
												$proto79=array();
$proto79["m_link"] = "SQLL_MAIN";
			$proto80=array();
$proto80["m_strName"] = "servicos";
$proto80["m_columns"] = array();
$proto80["m_columns"][] = "id";
$proto80["m_columns"][] = "titulo";
$proto80["m_columns"][] = "img_destaque";
$proto80["m_columns"][] = "img_interna";
$proto80["m_columns"][] = "conteudo";
$proto80["m_columns"][] = "destaque_home";
$proto80["m_columns"][] = "ativo";
$proto80["m_columns"][] = "excluir";
$proto80["m_columns"][] = "data";
$obj = new SQLTable($proto80);

$proto79["m_table"] = $obj;
$proto79["m_alias"] = "";
$proto81=array();
$proto81["m_sql"] = "";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "";
$proto81["m_havingmode"] = "0";
$proto81["m_inBrackets"] = "0";
$proto81["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto81);

$proto79["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto79);

$proto56["m_fromlist"][]=$obj;
$proto56["m_groupby"] = array();
$proto56["m_orderby"] = array();
$obj = new SQLQuery($proto56);

$queryData_servicos = $obj;
$tdataservicos[".sqlquery"] = $queryData_servicos;

include(getabspath("include/servicos_events.php"));
$tableEvents["servicos"] = new eventclass_servicos;

?>
