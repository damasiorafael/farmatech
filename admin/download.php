<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");

$table = postvalue("table");
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
{
	exit(0);
}

include("include/".$table."_variables.php");


if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	header("Location: login.php"); 
	return;
}

$field = postvalue("field");

//	check permissions
if(!CheckFieldPermissions($field))
	return;
	
$fieldsArr = GetFieldsList($strTableName);	

foreach ($fieldsArr as $f)
{
	$fViewFormat = GetFieldData($strTableName, $f, 'ViewFormat', false);
	if ($field == $f && ($fViewFormat != FORMAT_FILE && $fViewFormat != FORMAT_AUDIO && $fViewFormat != FORMAT_VIDEO))
	{
		exit(0);
	}
}

//	construct sql
$keysArr = GetTableData($strTableName, '.Keys', array());
$keys = array();
foreach ($keysArr as $ind=>$k)
{	
	$keys[$k]=postvalue("key".($ind+1));
}
$where=KeyWhere($keys);


$secOpt = GetTableData($strTableName, '.nSecOptions', ADVSECURITY_NONE);
if ($secOpt == ADVSECURITY_VIEW_OWN)
{
	$where=whereAdd($where,SecuritySQL("Search"));	
}

$sql = gSQLWhere($where);


$rs = db_query($sql,$conn);
if(!$rs)
  return;

$data=db_fetch_array($rs);


if(!$data)
	return;

$filename=$data[$field];
$ext=substr($filename,strlen($filename)-4);


if($ext==".asf")
	$ctype = "video/x-ms-asf";
elseif($ext==".avi")
	$ctype = "video/avi";
elseif($ext==".doc")
	$ctype = "application/msword";
elseif($ext==".zip")
	$ctype = "application/zip";
elseif($ext==".xls")
	$ctype = "application/vnd.ms-excel";
elseif($ext==".gif")
	$ctype = "image/gif";
elseif($ext==".jpg" || $ext=="jpeg")
	$ctype = "image/jpeg";
elseif($ext==".wav")
	$ctype = "audio/wav";
elseif($ext==".mp3")
	$ctype = "audio/mpeg3";
elseif($ext==".mpg" || $ext=="mpeg")
	$ctype = "video/mpeg";
elseif($ext==".rtf")
	$ctype = "application/rtf";
elseif($ext==".htm" || $ext=="html")
	$ctype = "text/html";
elseif($ext==".asp")
	$ctype = "text/asp";
else
	$ctype = "application/octet-stream";


if(GetFieldData($strTableName,$field,"Absolute",false))
	$absFileName = GetUploadFolder($field).$filename;
else
	$absFileName = getabspath(GetUploadFolder($field).$filename);
	
		
// if no file exists return 404 err
if (!file_exists($absFileName))
{
	returnError404();
	exit();
}
// get file size
$strfilesize = filesize($absFileName);
if($strfilesize===FALSE)
{
	returnError404();
	exit();
}

header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$filename."\"");
header("Cache-Control: private");
SendContentLength($strfilesize);
printfile($absFileName);
?>
