<?php
$tdataadmin_users=array();
	$tdataadmin_users[".NumberOfChars"]=80; 
	$tdataadmin_users[".ShortName"]="admin_users";
	$tdataadmin_users[".OwnerID"]="";
	$tdataadmin_users[".OriginalTable"]="users";


	
//	field labels
$fieldLabelsadmin_users = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadmin_users["Portuguese(Brazil)"]=array();
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]=array();
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["usuario"] = "Usuario";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["data"] = "";
	$fieldLabelsadmin_users["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsadmin_users["Portuguese(Brazil)"]["email"] = "";
	if (count($fieldToolTipsadmin_users["Portuguese(Brazil)"])){
		$tdataadmin_users[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_users[".NCSearch"]=true;

	

$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowList"] = 1;	
$tdataadmin_users[".tableGroupBy"] = "0";
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;




$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;
	
$tdataadmin_users[".listIcons"] = true;
$tdataadmin_users[".inlineEdit"] = true;

$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

$tdataadmin_users[".showSearchPanel"] = true;


$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_users[".addPageEvents"] = false;

$tdataadmin_users[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataadmin_users[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;

$tdataadmin_users[".isUseiBox"] = false;



$tdataadmin_users[".isUseInlineAdd"] = true;

$tdataadmin_users[".isUseInlineEdit"] = true;
$tdataadmin_users[".isUseInlineJs"] = $tdataadmin_users[".isUseInlineAdd"] || $tdataadmin_users[".isUseInlineEdit"];

$tdataadmin_users[".allSearchFields"] = array();

$tdataadmin_users[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "id";	
}
$tdataadmin_users[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "email";	
}
$tdataadmin_users[".globSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "usuario";	
}
$tdataadmin_users[".globSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "senha";	
}
$tdataadmin_users[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "ativo";	
}
$tdataadmin_users[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "excluir";	
}
$tdataadmin_users[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "data";	
}


$tdataadmin_users[".googleLikeFields"][] = "id";
$tdataadmin_users[".googleLikeFields"][] = "email";
$tdataadmin_users[".googleLikeFields"][] = "usuario";
$tdataadmin_users[".googleLikeFields"][] = "senha";
$tdataadmin_users[".googleLikeFields"][] = "ativo";
$tdataadmin_users[".googleLikeFields"][] = "excluir";
$tdataadmin_users[".googleLikeFields"][] = "data";



$tdataadmin_users[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "id";	
}
$tdataadmin_users[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "email";	
}
$tdataadmin_users[".advSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "usuario";	
}
$tdataadmin_users[".advSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "senha";	
}
$tdataadmin_users[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "ativo";	
}
$tdataadmin_users[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "excluir";	
}
$tdataadmin_users[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "data";	
}

$tdataadmin_users[".isTableType"] = "list";


	

$tdataadmin_users[".isDisplayLoading"] = true;

$tdataadmin_users[".isResizeColumns"] = false;





$tdataadmin_users[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$tdataadmin_users[".sqlFrom"] = "FROM users";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataadmin_users[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Id"; 
	
		
		
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
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["id"]=$fdata;
//	email
	$fdata = array();
	$fdata["strName"] = "email";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Email"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "email";
	
		$fdata["FullName"]= "email";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["email"]=$fdata;
//	usuario
	$fdata = array();
	$fdata["strName"] = "usuario";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Usuario"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "usuario";
	
		$fdata["FullName"]= "usuario";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["usuario"]=$fdata;
//	senha
	$fdata = array();
	$fdata["strName"] = "senha";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Senha"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "senha";
	
		$fdata["FullName"]= "senha";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=255";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["senha"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["excluir"]=$fdata;
//	data
	$fdata = array();
	$fdata["strName"] = "data";
	$fdata["ownerTable"] = "users";
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
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["data"]=$fdata;

	
$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strTable" => "users"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "users"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "users"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "users"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "users"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "users"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "users";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "email";
$proto20["m_columns"][] = "usuario";
$proto20["m_columns"][] = "senha";
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

$queryData_admin_users = $obj;
$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;

?>
