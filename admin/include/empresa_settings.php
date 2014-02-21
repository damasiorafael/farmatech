<?php
$tdataempresa=array();
	$tdataempresa[".NumberOfChars"]=80; 
	$tdataempresa[".ShortName"]="empresa";
	$tdataempresa[".OwnerID"]="";
	$tdataempresa[".OriginalTable"]="empresa";


	
//	field labels
$fieldLabelsempresa = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsempresa["Portuguese(Brazil)"]=array();
	$fieldToolTipsempresa["Portuguese(Brazil)"]=array();
	$fieldLabelsempresa["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["conteudo"] = "Conteúdo";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["conteudo"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["video"] = "Video";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["video"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["foto"] = "Foto";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["foto"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsempresa["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsempresa["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsempresa["Portuguese(Brazil)"])){
		$tdataempresa[".isUseToolTips"]=true;
	}
}


	
	$tdataempresa[".NCSearch"]=true;

	

$tdataempresa[".shortTableName"] = "empresa";
$tdataempresa[".nSecOptions"] = 0;
$tdataempresa[".recsPerRowList"] = 1;	
$tdataempresa[".tableGroupBy"] = "0";
$tdataempresa[".mainTableOwnerID"] = "";
$tdataempresa[".moveNext"] = 1;




$tdataempresa[".showAddInPopup"] = false;

$tdataempresa[".showEditInPopup"] = false;

$tdataempresa[".showViewInPopup"] = false;


$tdataempresa[".fieldsForRegister"] = array();

$tdataempresa[".listAjax"] = false;

	$tdataempresa[".audit"] = false;

	$tdataempresa[".locking"] = false;
	
$tdataempresa[".listIcons"] = true;
$tdataempresa[".inlineEdit"] = true;
$tdataempresa[".view"] = true;




$tdataempresa[".showSimpleSearchOptions"] = false;

$tdataempresa[".showSearchPanel"] = true;


$tdataempresa[".isUseAjaxSuggest"] = true;

$tdataempresa[".rowHighlite"] = true;


// button handlers file names

$tdataempresa[".addPageEvents"] = false;

$tdataempresa[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataempresa[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataempresa[".isUseTimeForSearch"] = false;

$tdataempresa[".isUseiBox"] = true;

$tdataempresa[".useIbox"] = true;



$tdataempresa[".isUseInlineEdit"] = true;
$tdataempresa[".isUseInlineJs"] = $tdataempresa[".isUseInlineAdd"] || $tdataempresa[".isUseInlineEdit"];

$tdataempresa[".allSearchFields"] = array();

$tdataempresa[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "id";	
}
$tdataempresa[".globSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "conteudo";	
}
$tdataempresa[".globSearchFields"][] = "video";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("video", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "video";	
}
$tdataempresa[".globSearchFields"][] = "foto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("foto", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "foto";	
}
$tdataempresa[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "ativo";	
}
$tdataempresa[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "excluir";	
}
$tdataempresa[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataempresa[".allSearchFields"]))
{
	$tdataempresa[".allSearchFields"][] = "data";	
}


$tdataempresa[".googleLikeFields"][] = "id";
$tdataempresa[".googleLikeFields"][] = "conteudo";
$tdataempresa[".googleLikeFields"][] = "video";
$tdataempresa[".googleLikeFields"][] = "foto";
$tdataempresa[".googleLikeFields"][] = "ativo";
$tdataempresa[".googleLikeFields"][] = "excluir";
$tdataempresa[".googleLikeFields"][] = "data";



$tdataempresa[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "id";	
}
$tdataempresa[".advSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "conteudo";	
}
$tdataempresa[".advSearchFields"][] = "video";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("video", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "video";	
}
$tdataempresa[".advSearchFields"][] = "foto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("foto", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "foto";	
}
$tdataempresa[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "ativo";	
}
$tdataempresa[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "excluir";	
}
$tdataempresa[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataempresa[".allSearchFields"])) 
{
	$tdataempresa[".allSearchFields"][] = "data";	
}

$tdataempresa[".isTableType"] = "list";


	

$tdataempresa[".isDisplayLoading"] = true;

$tdataempresa[".isResizeColumns"] = false;





$tdataempresa[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataempresa[".strOrderBy"] = $gstrOrderBy;
	
$tdataempresa[".orderindexes"] = array();

$tdataempresa[".sqlHead"] = "SELECT id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$tdataempresa[".sqlFrom"] = "FROM empresa";
$tdataempresa[".sqlWhereExpr"] = "";
$tdataempresa[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresa[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataempresa[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "empresa";
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
	
		
				
		
		
		
			$tdataempresa["id"]=$fdata;
//	conteudo
	$fdata = array();
	$fdata["strName"] = "conteudo";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Conteúdo"; 
	
		
		
	$fdata["FieldType"]= 201;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text area";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "conteudo";
	
		$fdata["FullName"]= "conteudo";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
			$fdata["EditParams"] = "";
			$fdata["EditParams"].= " rows=100";
		$fdata["nRows"] = 100;
			$fdata["EditParams"].= " cols=200";
		$fdata["nCols"] = 200;
		
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataempresa["conteudo"]=$fdata;
//	video
	$fdata = array();
	$fdata["strName"] = "video";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Video"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "video";
	
		$fdata["FullName"]= "video";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
			$fdata["EditParams"].= " size=50";
	
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataempresa["video"]=$fdata;
//	foto
	$fdata = array();
	$fdata["strName"] = "foto";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Foto"; 
	
		
		$fdata["LinkPrefix"]="uploads/"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = true;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "File-based Image";
	
		
		
			$fdata["ShowThumbnail"]=true; 
	$fdata["StrThumbnail"]="th";
	$fdata["ImageWidth"] = 0;
	$fdata["ImageHeight"] = 0;
	
		
		
	$fdata["GoodName"]= "foto";
	
		$fdata["FullName"]= "foto";
	
		
		
		
		
		
		$fdata["UseTimestamp"]=true; 
		$fdata["UploadFolder"]="uploads/"; 
		$fdata["Index"]= 4;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		$fdata["CreateThumbnail"]=true;
	$fdata["ThumbnailPrefix"]="th";
	
				
		
		
		
			$tdataempresa["foto"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataempresa["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataempresa["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "empresa";
		$fdata["Label"]="Data"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "data";
	
		$fdata["FullName"]= "`data`";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 7;
		$fdata["DateEditType"] = 11; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
		$fdata["bListPage"]=true; 
	
		
		
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataempresa["data"]=$fdata;

	
$tables_data["empresa"]=&$tdataempresa;
$field_labels["empresa"] = &$fieldLabelsempresa;
$fieldToolTips["empresa"] = &$fieldToolTipsempresa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empresa"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["empresa"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto56=array();
$proto56["m_strHead"] = "SELECT";
$proto56["m_strFieldList"] = "id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$proto56["m_strFrom"] = "FROM empresa";
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
	"m_strTable" => "empresa"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto56["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "conteudo",
	"m_strTable" => "empresa"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto56["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "video",
	"m_strTable" => "empresa"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto56["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "empresa"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto56["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "empresa"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto56["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "empresa"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto56["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "empresa"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto56["m_fieldlist"][]=$obj;
$proto56["m_fromlist"] = array();
												$proto75=array();
$proto75["m_link"] = "SQLL_MAIN";
			$proto76=array();
$proto76["m_strName"] = "empresa";
$proto76["m_columns"] = array();
$proto76["m_columns"][] = "id";
$proto76["m_columns"][] = "conteudo";
$proto76["m_columns"][] = "video";
$proto76["m_columns"][] = "foto";
$proto76["m_columns"][] = "ativo";
$proto76["m_columns"][] = "excluir";
$proto76["m_columns"][] = "data";
$obj = new SQLTable($proto76);

$proto75["m_table"] = $obj;
$proto75["m_alias"] = "";
$proto77=array();
$proto77["m_sql"] = "";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "";
$proto77["m_havingmode"] = "0";
$proto77["m_inBrackets"] = "0";
$proto77["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto77);

$proto75["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto75);

$proto56["m_fromlist"][]=$obj;
$proto56["m_groupby"] = array();
$proto56["m_orderby"] = array();
$obj = new SQLQuery($proto56);

$queryData_empresa = $obj;
$tdataempresa[".sqlquery"] = $queryData_empresa;

include(getabspath("include/empresa_events.php"));
$tableEvents["empresa"] = new eventclass_empresa;

?>
