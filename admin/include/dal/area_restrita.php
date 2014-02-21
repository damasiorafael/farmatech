<?php
$dalTablearea_restrita = array();
$dalTablearea_restrita["id"] = array("type"=>3,"varname"=>"id");
$dalTablearea_restrita["arquivo"] = array("type"=>200,"varname"=>"arquivo");
$dalTablearea_restrita["exclusivo"] = array("type"=>3,"varname"=>"exclusivo");
$dalTablearea_restrita["usuario"] = array("type"=>3,"varname"=>"usuario");
$dalTablearea_restrita["ativo"] = array("type"=>3,"varname"=>"ativo");
$dalTablearea_restrita["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTablearea_restrita["data"] = array("type"=>7,"varname"=>"data");
	$dalTablearea_restrita["id"]["key"]=true;
$dal_info["area-restrita"]=&$dalTablearea_restrita;

?>