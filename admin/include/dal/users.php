<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["usuario"] = array("type"=>200,"varname"=>"usuario");
$dalTableusers["senha"] = array("type"=>200,"varname"=>"senha");
$dalTableusers["ativo"] = array("type"=>3,"varname"=>"ativo");
$dalTableusers["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTableusers["data"] = array("type"=>7,"varname"=>"data");
	$dalTableusers["id"]["key"]=true;
$dal_info["users"]=&$dalTableusers;

?>