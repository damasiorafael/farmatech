<?php
$tdataadmin_rights=array();
	$tdataadmin_rights[".NumberOfChars"]=80; 
	$tdataadmin_rights[".ShortName"]="admin_rights";
	$tdataadmin_rights[".OwnerID"]="";
	$tdataadmin_rights[".OriginalTable"]="farmatech_ugrights";


	
//	field labels
$fieldLabelsadmin_rights = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadmin_rights["Portuguese(Brazil)"]=array();
	$fieldToolTipsadmin_rights["Portuguese(Brazil)"]=array();
	$fieldLabelsadmin_rights["Portuguese(Brazil)"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Portuguese(Brazil)"]["TableName"] = "";
	$fieldLabelsadmin_rights["Portuguese(Brazil)"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Portuguese(Brazil)"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Portuguese(Brazil)"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Portuguese(Brazil)"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Portuguese(Brazil)"])){
		$tdataadmin_rights[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_rights[".NCSearch"]=true;

	

$tdataadmin_rights[".shortTableName"] = "admin_rights";
$tdataadmin_rights[".nSecOptions"] = 0;
$tdataadmin_rights[".recsPerRowList"] = 1;	
$tdataadmin_rights[".tableGroupBy"] = "0";
$tdataadmin_rights[".mainTableOwnerID"] = "";
$tdataadmin_rights[".moveNext"] = 1;




$tdataadmin_rights[".showAddInPopup"] = false;

$tdataadmin_rights[".showEditInPopup"] = false;

$tdataadmin_rights[".showViewInPopup"] = false;


$tdataadmin_rights[".fieldsForRegister"] = array();

$tdataadmin_rights[".listAjax"] = false;

	$tdataadmin_rights[".audit"] = false;

	$tdataadmin_rights[".locking"] = false;
	
$tdataadmin_rights[".listIcons"] = true;




$tdataadmin_rights[".showSimpleSearchOptions"] = false;

$tdataadmin_rights[".showSearchPanel"] = true;


$tdataadmin_rights[".isUseAjaxSuggest"] = true;

$tdataadmin_rights[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_rights[".addPageEvents"] = false;


// use datepicker for search panel
$tdataadmin_rights[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataadmin_rights[".isUseTimeForSearch"] = false;

$tdataadmin_rights[".isUseiBox"] = false;




$tdataadmin_rights[".isUseInlineJs"] = $tdataadmin_rights[".isUseInlineAdd"] || $tdataadmin_rights[".isUseInlineEdit"];

$tdataadmin_rights[".allSearchFields"] = array();



$tdataadmin_rights[".googleLikeFields"][] = "TableName";
$tdataadmin_rights[".googleLikeFields"][] = "GroupID";
$tdataadmin_rights[".googleLikeFields"][] = "AccessMask";



$tdataadmin_rights[".advSearchFields"][] = "TableName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("TableName", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "TableName";	
}
$tdataadmin_rights[".advSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "GroupID";	
}
$tdataadmin_rights[".advSearchFields"][] = "AccessMask";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("AccessMask", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "AccessMask";	
}

$tdataadmin_rights[".isTableType"] = "list";


	

$tdataadmin_rights[".isDisplayLoading"] = true;

$tdataadmin_rights[".isResizeColumns"] = false;





$tdataadmin_rights[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_rights[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_rights[".orderindexes"] = array();

$tdataadmin_rights[".sqlHead"] = "SELECT TableName,   GroupID,   AccessMask";
$tdataadmin_rights[".sqlFrom"] = "FROM farmatech_ugrights";
$tdataadmin_rights[".sqlWhereExpr"] = "";
$tdataadmin_rights[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_rights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_rights[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tdataadmin_rights[".Keys"] = $tableKeys;

//	TableName
	$fdata = array();
	$fdata["strName"] = "TableName";
	$fdata["ownerTable"] = "farmatech_ugrights";
		$fdata["Label"]="Table Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "TableName";
	
		$fdata["FullName"]= "TableName";
	
		
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=50";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_rights["TableName"]=$fdata;
//	GroupID
	$fdata = array();
	$fdata["strName"] = "GroupID";
	$fdata["ownerTable"] = "farmatech_ugrights";
		$fdata["Label"]="Group ID"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "GroupID";
	
		$fdata["FullName"]= "GroupID";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_rights["GroupID"]=$fdata;
//	AccessMask
	$fdata = array();
	$fdata["strName"] = "AccessMask";
	$fdata["ownerTable"] = "farmatech_ugrights";
		$fdata["Label"]="Access Mask"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "AccessMask";
	
		$fdata["FullName"]= "AccessMask";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=10";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_rights["AccessMask"]=$fdata;

	
$tables_data["admin_rights"]=&$tdataadmin_rights;
$field_labels["admin_rights"] = &$fieldLabelsadmin_rights;
$fieldToolTips["admin_rights"] = &$fieldToolTipsadmin_rights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_rights"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_rights"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto83=array();
$proto83["m_strHead"] = "SELECT";
$proto83["m_strFieldList"] = "TableName,   GroupID,   AccessMask";
$proto83["m_strFrom"] = "FROM farmatech_ugrights";
$proto83["m_strWhere"] = "";
$proto83["m_strOrderBy"] = "";
$proto83["m_strTail"] = "";
$proto84=array();
$proto84["m_sql"] = "";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "";
$proto84["m_havingmode"] = "0";
$proto84["m_inBrackets"] = "0";
$proto84["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto84);

$proto83["m_where"] = $obj;
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = "0";
$proto86["m_inBrackets"] = "0";
$proto86["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto86);

$proto83["m_having"] = $obj;
$proto83["m_fieldlist"] = array();
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "TableName",
	"m_strTable" => "farmatech_ugrights"
));

$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto83["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "farmatech_ugrights"
));

$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto83["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "farmatech_ugrights"
));

$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto83["m_fieldlist"][]=$obj;
$proto83["m_fromlist"] = array();
												$proto94=array();
$proto94["m_link"] = "SQLL_MAIN";
			$proto95=array();
$proto95["m_strName"] = "farmatech_ugrights";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "TableName";
$proto95["m_columns"][] = "GroupID";
$proto95["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_alias"] = "";
$proto96=array();
$proto96["m_sql"] = "";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "";
$proto96["m_havingmode"] = "0";
$proto96["m_inBrackets"] = "0";
$proto96["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto83["m_fromlist"][]=$obj;
$proto83["m_groupby"] = array();
$proto83["m_orderby"] = array();
$obj = new SQLQuery($proto83);

$queryData_admin_rights = $obj;
$tdataadmin_rights[".sqlquery"] = $queryData_admin_rights;

$tableEvents["admin_rights"] = new eventsBase;

?>
