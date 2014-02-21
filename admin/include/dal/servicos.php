<?php
$dalTableservicos = array();
$dalTableservicos["id"] = array("type"=>3,"varname"=>"id");
$dalTableservicos["titulo"] = array("type"=>200,"varname"=>"titulo");
$dalTableservicos["img_destaque"] = array("type"=>200,"varname"=>"img_destaque");
$dalTableservicos["img_interna"] = array("type"=>200,"varname"=>"img_interna");
$dalTableservicos["conteudo"] = array("type"=>201,"varname"=>"conteudo");
$dalTableservicos["destaque_home"] = array("type"=>3,"varname"=>"destaque_home");
$dalTableservicos["ativo"] = array("type"=>3,"varname"=>"ativo");
$dalTableservicos["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTableservicos["data"] = array("type"=>7,"varname"=>"data");
	$dalTableservicos["id"]["key"]=true;
$dal_info["servicos"]=&$dalTableservicos;

?>