<?php
$tdataarea_restrita=array();
	$tdataarea_restrita[".NumberOfChars"]=80; 
	$tdataarea_restrita[".ShortName"]="area_restrita";
	$tdataarea_restrita[".OwnerID"]="";
	$tdataarea_restrita[".OriginalTable"]="area-restrita";


	
//	field labels
$fieldLabelsarea_restrita = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]=array();
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]=array();
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["arquivo"] = "Arquivo";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["arquivo"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["exclusivo"] = "Exclusivo";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["exclusivo"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["usuario"] = "Usuario";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsarea_restrita["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsarea_restrita["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsarea_restrita["Portuguese(Brazil)"])){
		$tdataarea_restrita[".isUseToolTips"]=true;
	}
}


	
	$tdataarea_restrita[".NCSearch"]=true;

	

$tdataarea_restrita[".shortTableName"] = "area_restrita";
$tdataarea_restrita[".nSecOptions"] = 0;
$tdataarea_restrita[".recsPerRowList"] = 1;	
$tdataarea_restrita[".tableGroupBy"] = "0";
$tdataarea_restrita[".mainTableOwnerID"] = "";
$tdataarea_restrita[".moveNext"] = 1;




$tdataarea_restrita[".showAddInPopup"] = false;

$tdataarea_restrita[".showEditInPopup"] = false;

$tdataarea_restrita[".showViewInPopup"] = false;


$tdataarea_restrita[".fieldsForRegister"] = array();

$tdataarea_restrita[".listAjax"] = false;

	$tdataarea_restrita[".audit"] = false;

	$tdataarea_restrita[".locking"] = false;
	
$tdataarea_restrita[".listIcons"] = true;
$tdataarea_restrita[".inlineEdit"] = true;
$tdataarea_restrita[".view"] = true;



$tdataarea_restrita[".delete"] = true;

$tdataarea_restrita[".showSimpleSearchOptions"] = false;

$tdataarea_restrita[".showSearchPanel"] = true;


$tdataarea_restrita[".isUseAjaxSuggest"] = true;

$tdataarea_restrita[".rowHighlite"] = true;


// button handlers file names

$tdataarea_restrita[".addPageEvents"] = false;

$tdataarea_restrita[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataarea_restrita[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataarea_restrita[".isUseTimeForSearch"] = false;

$tdataarea_restrita[".isUseiBox"] = true;

$tdataarea_restrita[".useIbox"] = true;


$tdataarea_restrita[".isUseInlineAdd"] = true;

$tdataarea_restrita[".isUseInlineEdit"] = true;
$tdataarea_restrita[".isUseInlineJs"] = $tdataarea_restrita[".isUseInlineAdd"] || $tdataarea_restrita[".isUseInlineEdit"];

$tdataarea_restrita[".allSearchFields"] = array();

$tdataarea_restrita[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "id";	
}
$tdataarea_restrita[".globSearchFields"][] = "arquivo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("arquivo", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "arquivo";	
}
$tdataarea_restrita[".globSearchFields"][] = "exclusivo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("exclusivo", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "exclusivo";	
}
$tdataarea_restrita[".globSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "usuario";	
}
$tdataarea_restrita[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "ativo";	
}
$tdataarea_restrita[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "excluir";	
}
$tdataarea_restrita[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataarea_restrita[".allSearchFields"]))
{
	$tdataarea_restrita[".allSearchFields"][] = "data";	
}


$tdataarea_restrita[".googleLikeFields"][] = "id";
$tdataarea_restrita[".googleLikeFields"][] = "arquivo";
$tdataarea_restrita[".googleLikeFields"][] = "exclusivo";
$tdataarea_restrita[".googleLikeFields"][] = "usuario";
$tdataarea_restrita[".googleLikeFields"][] = "ativo";
$tdataarea_restrita[".googleLikeFields"][] = "excluir";
$tdataarea_restrita[".googleLikeFields"][] = "data";



$tdataarea_restrita[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "id";	
}
$tdataarea_restrita[".advSearchFields"][] = "arquivo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("arquivo", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "arquivo";	
}
$tdataarea_restrita[".advSearchFields"][] = "exclusivo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("exclusivo", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "exclusivo";	
}
$tdataarea_restrita[".advSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "usuario";	
}
$tdataarea_restrita[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "ativo";	
}
$tdataarea_restrita[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "excluir";	
}
$tdataarea_restrita[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataarea_restrita[".allSearchFields"])) 
{
	$tdataarea_restrita[".allSearchFields"][] = "data";	
}

$tdataarea_restrita[".isTableType"] = "list";


	

$tdataarea_restrita[".isDisplayLoading"] = true;

$tdataarea_restrita[".isResizeColumns"] = false;





$tdataarea_restrita[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataarea_restrita[".strOrderBy"] = $gstrOrderBy;
	
$tdataarea_restrita[".orderindexes"] = array();

$tdataarea_restrita[".sqlHead"] = "SELECT id,  arquivo,  exclusivo,  usuario,  ativo,  excluir,  `data`";
$tdataarea_restrita[".sqlFrom"] = "FROM `area-restrita`";
$tdataarea_restrita[".sqlWhereExpr"] = "";
$tdataarea_restrita[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarea_restrita[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarea_restrita[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataarea_restrita[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "area-restrita";
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
	
		
				
		
		
		
			$tdataarea_restrita["id"]=$fdata;
//	arquivo
	$fdata = array();
	$fdata["strName"] = "arquivo";
	$fdata["ownerTable"] = "area-restrita";
		$fdata["Label"]="Arquivo"; 
	
		
		$fdata["LinkPrefix"]="/uploads"; 
	
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = true;
	
	$fdata["EditFormat"]= "Document upload";
	$fdata["ViewFormat"]= "Document Download";
	
		
		
		
		
		
	$fdata["GoodName"]= "arquivo";
	
		$fdata["FullName"]= "arquivo";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
		$fdata["UseTimestamp"]=true; 
		$fdata["UploadFolder"]="/uploads"; 
		$fdata["Index"]= 2;
				
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
	
				
		
		
		
			$tdataarea_restrita["arquivo"]=$fdata;
//	exclusivo
	$fdata = array();
	$fdata["strName"] = "exclusivo";
	$fdata["ownerTable"] = "area-restrita";
		$fdata["Label"]="Exclusivo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "exclusivo";
	
		$fdata["FullName"]= "exclusivo";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita["exclusivo"]=$fdata;
//	usuario
	$fdata = array();
	$fdata["strName"] = "usuario";
	$fdata["ownerTable"] = "area-restrita";
		$fdata["Label"]="Usuario"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="id";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="nome";
				$fdata["LookupTable"]="area-restrita-users";
	$fdata["LookupOrderBy"]="nome";
				$fdata["LookupDesc"]=true;
																
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "usuario";
	
		$fdata["FullName"]= "usuario";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataarea_restrita["usuario"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "area-restrita";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataarea_restrita["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "area-restrita";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataarea_restrita["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "area-restrita";
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
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataarea_restrita["data"]=$fdata;

	
$tables_data["area-restrita"]=&$tdataarea_restrita;
$field_labels["area_restrita"] = &$fieldLabelsarea_restrita;
$fieldToolTips["area-restrita"] = &$fieldToolTipsarea_restrita;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["area-restrita"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["area-restrita"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="area-restrita-users";
	$masterTablesData["area-restrita"][$mIndex] = array(
		  "mDataSourceTable"=>"area-restrita-users"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "area_restrita_users"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "1"
		, "hideChild" => "0"	
		, "dispInfo" => "1"								
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$masterTablesData["area-restrita"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["area-restrita"][$mIndex]["detailKeys"][]="usuario";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  arquivo,  exclusivo,  usuario,  ativo,  excluir,  `data`";
$proto0["m_strFrom"] = "FROM `area-restrita`";
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
	"m_strTable" => "area-restrita"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "arquivo",
	"m_strTable" => "area-restrita"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "exclusivo",
	"m_strTable" => "area-restrita"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "area-restrita"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "area-restrita"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "area-restrita"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "area-restrita"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "area-restrita";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "arquivo";
$proto20["m_columns"][] = "exclusivo";
$proto20["m_columns"][] = "usuario";
$proto20["m_columns"][] = "ativo";
$proto20["m_columns"][] = "excluir";
$proto20["m_columns"][] = "data";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

$queryData_area_restrita = $obj;
$tdataarea_restrita[".sqlquery"] = $queryData_area_restrita;

include(getabspath("include/area_restrita_events.php"));
$tableEvents["area-restrita"] = new eventclass_area_restrita;

?>
