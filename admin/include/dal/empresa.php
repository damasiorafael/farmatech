<?php
$dalTableempresa = array();
$dalTableempresa["id"] = array("type"=>3,"varname"=>"id");
$dalTableempresa["conteudo"] = array("type"=>201,"varname"=>"conteudo");
$dalTableempresa["video"] = array("type"=>200,"varname"=>"video");
$dalTableempresa["foto"] = array("type"=>200,"varname"=>"foto");
$dalTableempresa["ativo"] = array("type"=>3,"varname"=>"ativo");
$dalTableempresa["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTableempresa["data"] = array("type"=>7,"varname"=>"data");
	$dalTableempresa["id"]["key"]=true;
$dal_info["empresa"]=&$dalTableempresa;

?>