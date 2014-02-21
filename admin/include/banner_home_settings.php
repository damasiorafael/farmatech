<?php
$tdatabanner_home=array();
	$tdatabanner_home[".NumberOfChars"]=80; 
	$tdatabanner_home[".ShortName"]="banner_home";
	$tdatabanner_home[".OwnerID"]="";
	$tdatabanner_home[".OriginalTable"]="banner_home";


	
//	field labels
$fieldLabelsbanner_home = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbanner_home["Portuguese(Brazil)"]=array();
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]=array();
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["titulo_banner"] = "Título";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["titulo_banner"] = "";
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["imagem"] = "Imagem";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["imagem"] = "";
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsbanner_home["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsbanner_home["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsbanner_home["Portuguese(Brazil)"])){
		$tdatabanner_home[".isUseToolTips"]=true;
	}
}


	
	$tdatabanner_home[".NCSearch"]=true;

	

$tdatabanner_home[".shortTableName"] = "banner_home";
$tdatabanner_home[".nSecOptions"] = 0;
$tdatabanner_home[".recsPerRowList"] = 1;	
$tdatabanner_home[".tableGroupBy"] = "0";
$tdatabanner_home[".mainTableOwnerID"] = "";
$tdatabanner_home[".moveNext"] = 1;




$tdatabanner_home[".showAddInPopup"] = false;

$tdatabanner_home[".showEditInPopup"] = false;

$tdatabanner_home[".showViewInPopup"] = false;


$tdatabanner_home[".fieldsForRegister"] = array();

$tdatabanner_home[".listAjax"] = false;

	$tdatabanner_home[".audit"] = false;

	$tdatabanner_home[".locking"] = false;
	
$tdatabanner_home[".listIcons"] = true;
$tdatabanner_home[".inlineEdit"] = true;
$tdatabanner_home[".view"] = true;



$tdatabanner_home[".delete"] = true;

$tdatabanner_home[".showSimpleSearchOptions"] = false;

$tdatabanner_home[".showSearchPanel"] = true;


$tdatabanner_home[".isUseAjaxSuggest"] = true;

$tdatabanner_home[".rowHighlite"] = true;


// button handlers file names

$tdatabanner_home[".addPageEvents"] = false;

$tdatabanner_home[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdatabanner_home[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatabanner_home[".isUseTimeForSearch"] = false;

$tdatabanner_home[".isUseiBox"] = true;

$tdatabanner_home[".useIbox"] = true;


$tdatabanner_home[".isUseInlineAdd"] = true;

$tdatabanner_home[".isUseInlineEdit"] = true;
$tdatabanner_home[".isUseInlineJs"] = $tdatabanner_home[".isUseInlineAdd"] || $tdatabanner_home[".isUseInlineEdit"];

$tdatabanner_home[".allSearchFields"] = array();

$tdatabanner_home[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "id";	
}
$tdatabanner_home[".globSearchFields"][] = "titulo_banner";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("titulo_banner", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "titulo_banner";	
}
$tdatabanner_home[".globSearchFields"][] = "imagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("imagem", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "imagem";	
}
$tdatabanner_home[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "ativo";	
}
$tdatabanner_home[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "excluir";	
}
$tdatabanner_home[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatabanner_home[".allSearchFields"]))
{
	$tdatabanner_home[".allSearchFields"][] = "data";	
}


$tdatabanner_home[".googleLikeFields"][] = "id";
$tdatabanner_home[".googleLikeFields"][] = "titulo_banner";
$tdatabanner_home[".googleLikeFields"][] = "imagem";
$tdatabanner_home[".googleLikeFields"][] = "ativo";
$tdatabanner_home[".googleLikeFields"][] = "excluir";
$tdatabanner_home[".googleLikeFields"][] = "data";



$tdatabanner_home[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "id";	
}
$tdatabanner_home[".advSearchFields"][] = "titulo_banner";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("titulo_banner", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "titulo_banner";	
}
$tdatabanner_home[".advSearchFields"][] = "imagem";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("imagem", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "imagem";	
}
$tdatabanner_home[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "ativo";	
}
$tdatabanner_home[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "excluir";	
}
$tdatabanner_home[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatabanner_home[".allSearchFields"])) 
{
	$tdatabanner_home[".allSearchFields"][] = "data";	
}

$tdatabanner_home[".isTableType"] = "list";


	

$tdatabanner_home[".isDisplayLoading"] = true;

$tdatabanner_home[".isResizeColumns"] = false;





$tdatabanner_home[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatabanner_home[".strOrderBy"] = $gstrOrderBy;
	
$tdatabanner_home[".orderindexes"] = array();

$tdatabanner_home[".sqlHead"] = "SELECT id,  titulo_banner,  imagem,  ativo,  excluir,  `data`";
$tdatabanner_home[".sqlFrom"] = "FROM banner_home";
$tdatabanner_home[".sqlWhereExpr"] = "";
$tdatabanner_home[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabanner_home[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabanner_home[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdatabanner_home[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "banner_home";
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
	
		
				
		
		
		
			$tdatabanner_home["id"]=$fdata;
//	titulo_banner
	$fdata = array();
	$fdata["strName"] = "titulo_banner";
	$fdata["ownerTable"] = "banner_home";
		$fdata["Label"]="Título"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "titulo_banner";
	
		$fdata["FullName"]= "titulo_banner";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
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
	
		
				
		
		
		
			$tdatabanner_home["titulo_banner"]=$fdata;
//	imagem
	$fdata = array();
	$fdata["strName"] = "imagem";
	$fdata["ownerTable"] = "banner_home";
		$fdata["Label"]="Imagem"; 
	
		
		$fdata["LinkPrefix"]="uploads/"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = true;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "File-based Image";
	
		
		
			$fdata["ShowThumbnail"]=true; 
	$fdata["StrThumbnail"]="th";
	$fdata["ImageWidth"] = 0;
	$fdata["ImageHeight"] = 0;
	
		
		
	$fdata["GoodName"]= "imagem";
	
		$fdata["FullName"]= "imagem";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
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
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		$fdata["CreateThumbnail"]=true;
	$fdata["ThumbnailPrefix"]="th";
	
				
		
		
		
			$tdatabanner_home["imagem"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "banner_home";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdatabanner_home["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "banner_home";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabanner_home["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "banner_home";
		$fdata["Label"]="Data"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "data";
	
		$fdata["FullName"]= "`data`";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
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
	
		
				
		
		
		
			$tdatabanner_home["data"]=$fdata;

	
$tables_data["banner_home"]=&$tdatabanner_home;
$field_labels["banner_home"] = &$fieldLabelsbanner_home;
$fieldToolTips["banner_home"] = &$fieldToolTipsbanner_home;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["banner_home"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["banner_home"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto33=array();
$proto33["m_strHead"] = "SELECT";
$proto33["m_strFieldList"] = "id,  titulo_banner,  imagem,  ativo,  excluir,  `data`";
$proto33["m_strFrom"] = "FROM banner_home";
$proto33["m_strWhere"] = "";
$proto33["m_strOrderBy"] = "";
$proto33["m_strTail"] = "";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = "0";
$proto34["m_inBrackets"] = "0";
$proto34["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto34);

$proto33["m_where"] = $obj;
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = "0";
$proto36["m_inBrackets"] = "0";
$proto36["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto36);

$proto33["m_having"] = $obj;
$proto33["m_fieldlist"] = array();
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "banner_home"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto33["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo_banner",
	"m_strTable" => "banner_home"
));

$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto33["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem",
	"m_strTable" => "banner_home"
));

$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto33["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "banner_home"
));

$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto33["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "banner_home"
));

$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto33["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "banner_home"
));

$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto33["m_fieldlist"][]=$obj;
$proto33["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "banner_home";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "titulo_banner";
$proto51["m_columns"][] = "imagem";
$proto51["m_columns"][] = "ativo";
$proto51["m_columns"][] = "excluir";
$proto51["m_columns"][] = "data";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_alias"] = "";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = "0";
$proto52["m_inBrackets"] = "0";
$proto52["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto33["m_fromlist"][]=$obj;
$proto33["m_groupby"] = array();
$proto33["m_orderby"] = array();
$obj = new SQLQuery($proto33);

$queryData_banner_home = $obj;
$tdatabanner_home[".sqlquery"] = $queryData_banner_home;

include(getabspath("include/banner_home_events.php"));
$tableEvents["banner_home"] = new eventclass_banner_home;

?>
