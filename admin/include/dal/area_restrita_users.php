<?php
$dalTablearea_restrita_users = array();
$dalTablearea_restrita_users["id"] = array("type"=>3,"varname"=>"id");
$dalTablearea_restrita_users["nome"] = array("type"=>200,"varname"=>"nome");
$dalTablearea_restrita_users["email"] = array("type"=>200,"varname"=>"email");
$dalTablearea_restrita_users["endereco"] = array("type"=>200,"varname"=>"endereco");
$dalTablearea_restrita_users["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTablearea_restrita_users["estado"] = array("type"=>200,"varname"=>"estado");
$dalTablearea_restrita_users["cep"] = array("type"=>200,"varname"=>"cep");
$dalTablearea_restrita_users["telefone"] = array("type"=>200,"varname"=>"telefone");
$dalTablearea_restrita_users["senha"] = array("type"=>200,"varname"=>"senha");
$dalTablearea_restrita_users["ativo"] = array("type"=>3,"varname"=>"ativo");
$dalTablearea_restrita_users["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTablearea_restrita_users["data"] = array("type"=>7,"varname"=>"data");
	$dalTablearea_restrita_users["id"]["key"]=true;
$dal_info["area-restrita-users"]=&$dalTablearea_restrita_users;

?>