<?php
$dalTablecontato = array();
$dalTablecontato["id"] = array("type"=>3,"varname"=>"id");
$dalTablecontato["nome"] = array("type"=>200,"varname"=>"nome");
$dalTablecontato["email"] = array("type"=>200,"varname"=>"email");
$dalTablecontato["endereco"] = array("type"=>200,"varname"=>"endereco");
$dalTablecontato["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTablecontato["estado"] = array("type"=>200,"varname"=>"estado");
$dalTablecontato["telefone"] = array("type"=>200,"varname"=>"telefone");
$dalTablecontato["assunto"] = array("type"=>200,"varname"=>"assunto");
$dalTablecontato["mensagem"] = array("type"=>201,"varname"=>"mensagem");
$dalTablecontato["respondido"] = array("type"=>3,"varname"=>"respondido");
$dalTablecontato["excluir"] = array("type"=>3,"varname"=>"excluir");
$dalTablecontato["data"] = array("type"=>7,"varname"=>"data");
	$dalTablecontato["id"]["key"]=true;
$dal_info["contato"]=&$dalTablecontato;

?>