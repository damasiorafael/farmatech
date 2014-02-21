<?php
$tdatausers=array();
	$tdatausers[".NumberOfChars"]=80; 
	$tdatausers[".ShortName"]="users";
	$tdatausers[".OwnerID"]="";
	$tdatausers[".OriginalTable"]="users";


	
//	field labels
$fieldLabelsusers = array();
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsusers["Portuguese(Brazil)"]=array();
	$fieldToolTipsusers["Portuguese(Brazil)"]=array();
	$fieldLabelsusers["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsusers["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsusers["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["usuario"] = "Usuário";
	$fieldToolTipsusers["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsusers["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["ativo"] = "Ativo";
	$fieldToolTipsusers["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["excluir"] = "Excluir";
	$fieldToolTipsusers["Portuguese(Brazil)"]["excluir"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["data"] = "Data";
	$fieldToolTipsusers["Portuguese(Brazil)"]["data"] = "";
	if (count($fieldToolTipsusers["Portuguese(Brazil)"])){
		$tdatausers[".isUseToolTips"]=true;
	}
}


	
	$tdatausers[".NCSearch"]=true;

	

$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowList"] = 1;	
$tdatausers[".tableGroupBy"] = "0";
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;




$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;
	
$tdatausers[".listIcons"] = true;
$tdatausers[".inlineEdit"] = true;
$tdatausers[".view"] = true;



$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

$tdatausers[".showSearchPanel"] = true;


$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;


// button handlers file names

$tdatausers[".addPageEvents"] = false;

$tdatausers[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdatausers[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;

$tdatausers[".isUseiBox"] = false;



$tdatausers[".isUseInlineAdd"] = true;

$tdatausers[".isUseInlineEdit"] = true;
$tdatausers[".isUseInlineJs"] = $tdatausers[".isUseInlineAdd"] || $tdatausers[".isUseInlineEdit"];

$tdatausers[".allSearchFields"] = array();

$tdatausers[".globSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "id";	
}
$tdatausers[".globSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "email";	
}
$tdatausers[".globSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "usuario";	
}
$tdatausers[".globSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "senha";	
}
$tdatausers[".globSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "ativo";	
}
$tdatausers[".globSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "excluir";	
}
$tdatausers[".globSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatausers[".allSearchFields"]))
{
	$tdatausers[".allSearchFields"][] = "data";	
}


$tdatausers[".googleLikeFields"][] = "id";
$tdatausers[".googleLikeFields"][] = "email";
$tdatausers[".googleLikeFields"][] = "usuario";
$tdatausers[".googleLikeFields"][] = "senha";
$tdatausers[".googleLikeFields"][] = "ativo";
$tdatausers[".googleLikeFields"][] = "excluir";
$tdatausers[".googleLikeFields"][] = "data";



$tdatausers[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "id";	
}
$tdatausers[".advSearchFields"][] = "email";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("email", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "email";	
}
$tdatausers[".advSearchFields"][] = "usuario";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("usuario", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "usuario";	
}
$tdatausers[".advSearchFields"][] = "senha";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("senha", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "senha";	
}
$tdatausers[".advSearchFields"][] = "ativo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ativo", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "ativo";	
}
$tdatausers[".advSearchFields"][] = "excluir";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("excluir", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "excluir";	
}
$tdatausers[".advSearchFields"][] = "data";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("data", $tdatausers[".allSearchFields"])) 
{
	$tdatausers[".allSearchFields"][] = "data";	
}

$tdatausers[".isTableType"] = "list";


	

$tdatausers[".isDisplayLoading"] = true;

$tdatausers[".isResizeColumns"] = false;





$tdatausers[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatausers[".strOrderBy"] = $gstrOrderBy;
	
$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdatausers[".Keys"] = $tableKeys;

//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "users";
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatausers["id"]=$fdata;
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
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatausers["email"]=$fdata;
//	usuario
	$fdata = array();
	$fdata["strName"] = "usuario";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Usuário"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "usuario";
	
		$fdata["FullName"]= "usuario";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
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
	
		
				
		
		
		
			$tdatausers["usuario"]=$fdata;
//	senha
	$fdata = array();
	$fdata["strName"] = "senha";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Senha"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Password";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "senha";
	
		$fdata["FullName"]= "senha";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 4;
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
	
		
				
		
		
		
			$tdatausers["senha"]=$fdata;
//	ativo
	$fdata = array();
	$fdata["strName"] = "ativo";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Ativo"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "ativo";
	
		$fdata["FullName"]= "ativo";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
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
	
		
				
		
		
		
			$tdatausers["ativo"]=$fdata;
//	excluir
	$fdata = array();
	$fdata["strName"] = "excluir";
	$fdata["ownerTable"] = "users";
		$fdata["Label"]="Excluir"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "excluir";
	
		$fdata["FullName"]= "excluir";
	
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
	
		
				
		
		
		
			$tdatausers["excluir"]=$fdata;
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
	
		
				
		
		
		
			$tdatausers["data"]=$fdata;

	
$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










$proto79=array();
$proto79["m_strHead"] = "SELECT";
$proto79["m_strFieldList"] = "id,   email,   usuario,   senha,   ativo,   excluir,   `data`";
$proto79["m_strFrom"] = "FROM users";
$proto79["m_strWhere"] = "";
$proto79["m_strOrderBy"] = "";
$proto79["m_strTail"] = "";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = "0";
$proto80["m_inBrackets"] = "0";
$proto80["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto80);

$proto79["m_where"] = $obj;
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = "0";
$proto82["m_inBrackets"] = "0";
$proto82["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto82);

$proto79["m_having"] = $obj;
$proto79["m_fieldlist"] = array();
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users"
));

$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto79["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users"
));

$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto79["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "users"
));

$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto79["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "users"
));

$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto79["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "users"
));

$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto79["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "excluir",
	"m_strTable" => "users"
));

$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto79["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "users"
));

$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto79["m_fieldlist"][]=$obj;
$proto79["m_fromlist"] = array();
												$proto98=array();
$proto98["m_link"] = "SQLL_MAIN";
			$proto99=array();
$proto99["m_strName"] = "users";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "id";
$proto99["m_columns"][] = "email";
$proto99["m_columns"][] = "usuario";
$proto99["m_columns"][] = "senha";
$proto99["m_columns"][] = "ativo";
$proto99["m_columns"][] = "excluir";
$proto99["m_columns"][] = "data";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_alias"] = "";
$proto100=array();
$proto100["m_sql"] = "";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "";
$proto100["m_havingmode"] = "0";
$proto100["m_inBrackets"] = "0";
$proto100["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto79["m_fromlist"][]=$obj;
$proto79["m_groupby"] = array();
$proto79["m_orderby"] = array();
$obj = new SQLQuery($proto79);

$queryData_users = $obj;
$tdatausers[".sqlquery"] = $queryData_users;

include(getabspath("include/users_events.php"));
$tableEvents["users"] = new eventclass_users;

?>
