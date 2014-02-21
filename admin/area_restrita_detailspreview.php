<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/area_restrita_variables.php");

$mode=postvalue("mode");

if(!@$_SESSION["UserID"])
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

include('include/xtempl.php');
$xt = new Xtempl();


$recordsCounter = 0;

//	process masterkey value
$mastertable=postvalue("mastertable");
if($mastertable!="")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i=1;
	while(isset($_REQUEST["masterkey".$i]))
	{
		$_SESSION[$strTableName."_masterkey".$i]=$_REQUEST["masterkey".$i];
		$i++;
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable=$_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable=="area-restrita-users")
{
	$where ="";
		$where.= GetFullFieldName("usuario")."=".make_db_value("usuario",$_SESSION[$strTableName."_masterkey1"]);
}


$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount=gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if ( $rowcount ) {
	$xt->assign("details_data",true);
	$rs=db_query($strSQL,$conn);

	$display_count=10;
	if($mode=="inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo=array();
		
	while (($data = db_fetch_array($rs)) && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row=array();
		$keylink="";
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));

	
	//	id - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"id", ""),"field=id".$keylink,"",MODE_PRINT);
			$row["id_value"]=$value;
	//	arquivo - Document Download
		    $value="";
				$value = GetData($data,"arquivo", "Document Download");
			$row["arquivo_value"]=$value;
	//	exclusivo - Checkbox
		    $value="";
				$value = GetData($data,"exclusivo", "Checkbox");
			$row["exclusivo_value"]=$value;
	//	usuario - 
		    $value="";
				$value=DisplayLookupWizard("usuario",$data["usuario"],$data,$keylink,MODE_PRINT);
			$row["usuario_value"]=$value;
	//	ativo - Checkbox
		    $value="";
				$value = GetData($data,"ativo", "Checkbox");
			$row["ativo_value"]=$value;
	//	excluir - Checkbox
		    $value="";
				$value = GetData($data,"excluir", "Checkbox");
			$row["excluir_value"]=$value;
	//	data - Short Date
		    $value="";
				$value = ProcessLargeText(GetData($data,"data", "Short Date"),"field=data".$keylink,"",MODE_PRINT);
			$row["data_value"]=$value;
	$rowinfo[]=$row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
} else {
}
$xt->display("area_restrita_detailspreview.htm");
if($mode!="inline")
	echo "counterSeparator".postvalue("counter");
?>