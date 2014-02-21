<?php
$tdataadmin_members=array();
	$tdataadmin_members[".NumberOfChars"]=80; 
	$tdataadmin_members[".ShortName"]="admin_members";
	$tdataadmin_members[".OwnerID"]="";
	$tdataadmin_members[".OriginalTable"]="users";


	
//	field labels
$fieldLabelsadmin_members = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadmin_members["Portuguese(Brazil)"]=array();
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]=array();
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usuario"] = "Usuario";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["data"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["email"] = "";
	if (count($fieldToolTipsadmin_members["Portuguese(Brazil)"])){
		$tdataadmin_members[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_members[".NCSearch"]=true;

	

$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowList"] = 1;	
$tdataadmin_members[".tableGroupBy"] = "0";
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;
	
$tdataadmin_members[".listIcons"] = true;




$tdataadmin_members[".showSimpleSearchOptions"] = false;

$tdataadmin_members[".showSearchPanel"] = true;


$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_members[".addPageEvents"] = false;

$tdataadmin_members[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataadmin_members[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;

$tdataadmin_members[".isUseiBox"] = false;




$tdataadmin_members[".isUseInlineJs"] = $tdataadmin_members[".isUseInlineAdd"] || $tdataadmin_members[".isUseInlineEdit"];

$tdataadmin_members[".allSearchFields"] = array();

$tdataadmin_members[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "id";	
}
$tdataadmin_members[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "email";	
}
$tdataadmin_members[".globSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "usuario";	
}
$tdataadmin_members[".globSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "senha";	
}
$tdataadmin_members[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "ativo";	
}
$tdataadmin_members[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "excluir";	
}
$tdataadmin_members[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "data";	
}


$tdataadmin_members[".googleLikeFields"][] = "id";
$tdataadmin_members[".googleLikeFields"][] = "email";
$tdataadmin_members[".googleLikeFields"][] = "usuario";
$tdataadmin_members[".googleLikeFields"][] = "senha";
$tdataadmin_members[".googleLikeFields"][] = "ativo";
$tdataadmin_members[".googleLikeFields"][] = "excluir";
$tdataadmin_members[".googleLikeFields"][] = "data";



$tdataadmin_members[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "id";	
}
$tdataadmin_members[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "email";	
}
$tdataadmin_members[".advSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "usuario";	
}
$tdataadmin_members[".advSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "senha";	
}
$tdataadmin_members[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "ativo";	
}
$tdataadmin_members[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "excluir";	
}
$tdataadmin_members[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "data";	
}

$tdataadmin_members[".isTableType"] = "list";


	

$tdataadmin_members[".isDisplayLoading"] = true;

$tdataadmin_members[".isResizeColumns"] = false;





$tdataadmin_members[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$tdataadmin_members[".sqlFrom"] = "FROM users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataadmin_members[".Keys"] = $tableKeys;

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
	
		
				
		
		
		
			$tdataadmin_members["id"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["email"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["usuario"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["senha"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["ativo"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["excluir"]=$fdata;
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
	
		
				
		
		
		
			$tdataadmin_members["data"]=$fdata;

	
$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto23=array();
$proto23["m_strHead"] = "SELECT";
$proto23["m_strFieldList"] = "id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$proto23["m_strFrom"] = "FROM users";
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
	"m_strTable" => "users"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto23["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto23["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "users"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto23["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "users"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto23["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "users"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto23["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "users"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto23["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "users"
));

$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto23["m_fieldlist"][]=$obj;
$proto23["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "users";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "email";
$proto43["m_columns"][] = "usuario";
$proto43["m_columns"][] = "senha";
$proto43["m_columns"][] = "ativo";
$proto43["m_columns"][] = "excluir";
$proto43["m_columns"][] = "data";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_alias"] = "";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = "0";
$proto44["m_inBrackets"] = "0";
$proto44["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto23["m_fromlist"][]=$obj;
$proto23["m_groupby"] = array();
$proto23["m_orderby"] = array();
$obj = new SQLQuery($proto23);

$queryData_admin_members = $obj;
$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;

?>
