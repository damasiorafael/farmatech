<?php
$dalTableorcamento = array();
$dalTableorcamento["id"] = array("type"=>3,"varname"=>"id");
$dalTableorcamento["nome"] = array("type"=>200,"varname"=>"nome");
$dalTableorcamento["email"] = array("type"=>200,"varname"=>"email");
$dalTableorcamento["endereco"] = array("type"=>200,"varname"=>"endereco");
$dalTableorcamento["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTableorcamento["estado"] = array("type"=>200,"varname"=>"estado");
$dalTableorcamento["telefone"] = array("type"=>200,"varname"=>"telefone");
$dalTableorcamento["receita"] = array("type"=>200,"varname"=>"receita");
$dalTableorcamento["mensagem"] = array("type"=>201,"varname"=>"mensagem");
$dalTableorcamento["respondido"] = array("type"=>3,"varname"=>"respondido");
$dalTableorcamento["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTableorcamento["data"] = array("type"=>7,"varname"=>"data");
	$dalTableorcamento["id"]["key"]=true;
$dal_info["orcamento"]=&$dalTableorcamento;

?>