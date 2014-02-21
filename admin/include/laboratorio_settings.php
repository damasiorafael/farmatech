<?php
$tdatalaboratorio=array();
	$tdatalaboratorio[".NumberOfChars"]=80; 
	$tdatalaboratorio[".ShortName"]="laboratorio";
	$tdatalaboratorio[".OwnerID"]="";
	$tdatalaboratorio[".OriginalTable"]="laboratorio";


	
//	field labels
$fieldLabelslaboratorio = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelslaboratorio["Portuguese(Brazil)"]=array();
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]=array();
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["conteudo"] = "Conteúdo";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["conteudo"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["video"] = "Video";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["video"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["foto"] = "Foto";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["foto"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelslaboratorio["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipslaboratorio["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipslaboratorio["Portuguese(Brazil)"])){
		$tdatalaboratorio[".isUseToolTips"]=true;
	}
}


	
	$tdatalaboratorio[".NCSearch"]=true;

	

$tdatalaboratorio[".shortTableName"] = "laboratorio";
$tdatalaboratorio[".nSecOptions"] = 0;
$tdatalaboratorio[".recsPerRowList"] = 1;	
$tdatalaboratorio[".tableGroupBy"] = "0";
$tdatalaboratorio[".mainTableOwnerID"] = "";
$tdatalaboratorio[".moveNext"] = 1;




$tdatalaboratorio[".showAddInPopup"] = false;

$tdatalaboratorio[".showEditInPopup"] = false;

$tdatalaboratorio[".showViewInPopup"] = false;


$tdatalaboratorio[".fieldsForRegister"] = array();

$tdatalaboratorio[".listAjax"] = false;

	$tdatalaboratorio[".audit"] = false;

	$tdatalaboratorio[".locking"] = false;
	
$tdatalaboratorio[".listIcons"] = true;
$tdatalaboratorio[".inlineEdit"] = true;
$tdatalaboratorio[".view"] = true;




$tdatalaboratorio[".showSimpleSearchOptions"] = false;

$tdatalaboratorio[".showSearchPanel"] = true;


$tdatalaboratorio[".isUseAjaxSuggest"] = true;

$tdatalaboratorio[".rowHighlite"] = true;


// button handlers file names

$tdatalaboratorio[".addPageEvents"] = false;

$tdatalaboratorio[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdatalaboratorio[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatalaboratorio[".isUseTimeForSearch"] = false;

$tdatalaboratorio[".isUseiBox"] = true;

$tdatalaboratorio[".useIbox"] = true;



$tdatalaboratorio[".isUseInlineEdit"] = true;
$tdatalaboratorio[".isUseInlineJs"] = $tdatalaboratorio[".isUseInlineAdd"] || $tdatalaboratorio[".isUseInlineEdit"];

$tdatalaboratorio[".allSearchFields"] = array();

$tdatalaboratorio[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "id";	
}
$tdatalaboratorio[".globSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "conteudo";	
}
$tdatalaboratorio[".globSearchFields"][] = "video";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("video", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "video";	
}
$tdatalaboratorio[".globSearchFields"][] = "foto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("foto", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "foto";	
}
$tdatalaboratorio[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "ativo";	
}
$tdatalaboratorio[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "excluir";	
}
$tdatalaboratorio[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatalaboratorio[".allSearchFields"]))
{
	$tdatalaboratorio[".allSearchFields"][] = "data";	
}


$tdatalaboratorio[".googleLikeFields"][] = "id";
$tdatalaboratorio[".googleLikeFields"][] = "conteudo";
$tdatalaboratorio[".googleLikeFields"][] = "video";
$tdatalaboratorio[".googleLikeFields"][] = "foto";
$tdatalaboratorio[".googleLikeFields"][] = "ativo";
$tdatalaboratorio[".googleLikeFields"][] = "excluir";
$tdatalaboratorio[".googleLikeFields"][] = "data";



$tdatalaboratorio[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "id";	
}
$tdatalaboratorio[".advSearchFields"][] = "conteudo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("conteudo", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "conteudo";	
}
$tdatalaboratorio[".advSearchFields"][] = "video";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("video", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "video";	
}
$tdatalaboratorio[".advSearchFields"][] = "foto";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("foto", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "foto";	
}
$tdatalaboratorio[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "ativo";	
}
$tdatalaboratorio[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "excluir";	
}
$tdatalaboratorio[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatalaboratorio[".allSearchFields"])) 
{
	$tdatalaboratorio[".allSearchFields"][] = "data";	
}

$tdatalaboratorio[".isTableType"] = "list";


	

$tdatalaboratorio[".isDisplayLoading"] = true;

$tdatalaboratorio[".isResizeColumns"] = false;





$tdatalaboratorio[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatalaboratorio[".strOrderBy"] = $gstrOrderBy;
	
$tdatalaboratorio[".orderindexes"] = array();

$tdatalaboratorio[".sqlHead"] = "SELECT id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$tdatalaboratorio[".sqlFrom"] = "FROM laboratorio";
$tdatalaboratorio[".sqlWhereExpr"] = "";
$tdatalaboratorio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalaboratorio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalaboratorio[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdatalaboratorio[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["id"]=$fdata;
//	conteudo
	$fdata = array();
	$fdata["strName"] = "conteudo";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["conteudo"]=$fdata;
//	video
	$fdata = array();
	$fdata["strName"] = "video";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["video"]=$fdata;
//	foto
	$fdata = array();
	$fdata["strName"] = "foto";
	$fdata["ownerTable"] = "laboratorio";
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
	
				
		
		
		
			$tdatalaboratorio["foto"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "laboratorio";
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
	
		
				
		
		
		
			$tdatalaboratorio["data"]=$fdata;

	
$tables_data["laboratorio"]=&$tdatalaboratorio;
$field_labels["laboratorio"] = &$fieldLabelslaboratorio;
$fieldToolTips["laboratorio"] = &$fieldToolTipslaboratorio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["laboratorio"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["laboratorio"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto33=array();
$proto33["m_strHead"] = "SELECT";
$proto33["m_strFieldList"] = "id,  conteudo,  video,  foto,  ativo,  excluir,  `data`";
$proto33["m_strFrom"] = "FROM laboratorio";
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
	"m_strTable" => "laboratorio"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto33["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "conteudo",
	"m_strTable" => "laboratorio"
));

$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto33["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "video",
	"m_strTable" => "laboratorio"
));

$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto33["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "foto",
	"m_strTable" => "laboratorio"
));

$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto33["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "laboratorio"
));

$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto33["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "laboratorio"
));

$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto33["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "laboratorio"
));

$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto33["m_fieldlist"][]=$obj;
$proto33["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "laboratorio";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "conteudo";
$proto53["m_columns"][] = "video";
$proto53["m_columns"][] = "foto";
$proto53["m_columns"][] = "ativo";
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

$proto33["m_fromlist"][]=$obj;
$proto33["m_groupby"] = array();
$proto33["m_orderby"] = array();
$obj = new SQLQuery($proto33);

$queryData_laboratorio = $obj;
$tdatalaboratorio[".sqlquery"] = $queryData_laboratorio;

include(getabspath("include/laboratorio_events.php"));
$tableEvents["laboratorio"] = new eventclass_laboratorio;

?>
