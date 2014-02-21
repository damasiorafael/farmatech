<?php
include(getabspath("include/area_restrita_users_settings.php"));

function DisplayMasterTableInfo_area_restrita_users($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="area-restrita-users";

//$strSQL = "SELECT  id,  nome,  email,  endereco,  cidade,  estado,  cep,  telefone,  senha,  ativo,  excluir,  `data`  FROM `area-restrita-users`  ";

$sqlHead="SELECT id,  nome,  email,  endereco,  cidade,  estado,  cep,  telefone,  senha,  ativo,  excluir,  `data`";
$sqlFrom="FROM `area-restrita-users`";
$sqlWhere="";
$sqlTail="";

$where="";

if($detailtable=="area-restrita")
{
		$where.= GetFullFieldName("id")."=".make_db_value("id",$keys[1-1]);
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere=whereAdd($sqlWhere,$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL= $sqlHead.' '.$sqlFrom.$strWhere.$sqlTail;

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data=db_fetch_array($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	


//	id - 
			$value="";
				$value = ProcessLargeText(GetData($data,"id", ""),"field=id".$keylink,"",MODE_PRINT);
			$xt->assign("id_mastervalue",$value);

//	nome - 
			$value="";
				$value = ProcessLargeText(GetData($data,"nome", ""),"field=nome".$keylink,"",MODE_PRINT);
			$xt->assign("nome_mastervalue",$value);

//	email - 
			$value="";
				$value = ProcessLargeText(GetData($data,"email", ""),"field=email".$keylink,"",MODE_PRINT);
			$xt->assign("email_mastervalue",$value);

//	endereco - 
			$value="";
				$value = ProcessLargeText(GetData($data,"endereco", ""),"field=endereco".$keylink,"",MODE_PRINT);
			$xt->assign("endereco_mastervalue",$value);

//	cidade - 
			$value="";
				$value = ProcessLargeText(GetData($data,"cidade", ""),"field=cidade".$keylink,"",MODE_PRINT);
			$xt->assign("cidade_mastervalue",$value);

//	estado - 
			$value="";
				$value = ProcessLargeText(GetData($data,"estado", ""),"field=estado".$keylink,"",MODE_PRINT);
			$xt->assign("estado_mastervalue",$value);

//	cep - 
			$value="";
				$value = ProcessLargeText(GetData($data,"cep", ""),"field=cep".$keylink,"",MODE_PRINT);
			$xt->assign("cep_mastervalue",$value);

//	telefone - 
			$value="";
				$value = ProcessLargeText(GetData($data,"telefone", ""),"field=telefone".$keylink,"",MODE_PRINT);
			$xt->assign("telefone_mastervalue",$value);

//	senha - 
			$value="";
				$value = ProcessLargeText(GetData($data,"senha", ""),"field=senha".$keylink,"",MODE_PRINT);
			$xt->assign("senha_mastervalue",$value);

//	ativo - Checkbox
			$value="";
				$value = GetData($data,"ativo", "Checkbox");
			$xt->assign("ativo_mastervalue",$value);

//	excluir - Checkbox
			$value="";
				$value = GetData($data,"excluir", "Checkbox");
			$xt->assign("excluir_mastervalue",$value);

//	data - Short Date
			$value="";
				$value = ProcessLargeText(GetData($data,"data", "Short Date"),"field=data".$keylink,"",MODE_PRINT);
			$xt->assign("data_mastervalue",$value);
	$xt->display("area_restrita_users_masterprint.htm");
	$strTableName=$oldTableName;

}

?>