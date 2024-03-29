<?php

function db_addslashes($str)
{
	return mysql_real_escape_string($str);
}


function db_addslashesbinary($str)
{
	return add_mysql_binaryslashes($str);
}

function db_stripslashesbinary($str)
{
	return $str;
}


// adds wrappers to field name if required
function AddFieldWrappers($strName)
{
	global $strLeftWrapper,$strRightWrapper;
	if(substr($strName,0,1)==$strLeftWrapper)
		return $strName;
	return $strLeftWrapper.$strName.$strRightWrapper;
}

function AddTableWrappers($strName)
{
	return AddFieldWrappers($strName);
}

// removes wrappers from field name if required
function RemoveFieldWrappers($strName)
{
	global $strLeftWrapper,$strRightWrapper;
	if(substr($strName,0,1)==$strLeftWrapper)
		return substr($strName,1,strlen($strName)-2);
	return $strName;
}

function RemoveTableWrappers($strName)
{
	return RemoveFieldWrappers($strName);
}

function db_upper($dbval)
{
	return "upper(".$dbval.")";
}

function db_datequotes($val)
{
	return "'".$val."'";
}

function db_field2char($value,$type)
{
//  is called for Contains and Starts with searches
	return $value;
}

function db_field2time($value,$type)
{
//	is called when searhing in View as:Time fields
	if(IsDateFieldType($type))
		return "time(".$value.")";
	return $value;
}


?>