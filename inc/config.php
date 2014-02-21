<?php
@session_start();
//error_reporting(E_ALL);
error_reporting(0);

$id_session = sha1(session_id());
//$num = rand(0,9)."<br />";

$_SESSION["num_session"] = $id_session;
$num_session = $_SESSION["num_session"];

if ($_SERVER['SERVER_NAME'] == 'server' ){
	$con = mysql_pconnect('server','root','admin');
	$db = mysql_select_db('nadar');
} else {
	$con = mysql_pconnect('mysql2.iphotel.com.br','farmatech','farmatech');
	$db = mysql_select_db('farmatech');
	//$con = mysql_pconnect('127.0.0.1','root','');
	//$db = mysql_select_db('farmatech');
}

//CONFIGURACOES DE EMAIL
$Host		= "smtp.farmatech.com.br";
$Username 	= "farmatech@farmatech.com.br";
$Password	= "F33261770F";
$Port		= "587";



function protecao($string){

  // Passando a primeira letra pra Maiúsculo e o restante pra minúsculo 
  //$string = strtolower($string);  	
  
  // Verificando alguns elementos que não podem ser passado por POST e nem por GET, e trocando eles por vazio dai ... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = str_replace("'", "", $string);
  $string = str_replace("#", "", $string);
  $string = str_replace("=", "", $string);
  $string = str_replace("--", "", $string);
  $string = str_replace("-", "", $string);
  $string = str_replace(";", "", $string);
  $string = str_replace("*", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function protecao2($string){
  
  // Verificando alguns elementos que nÃƒÂ£o podem ser passado por POST e nem por GET, e trocando eles por vazio dai ... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function consulta_db($sql) {
	return mysql_query($sql);
}

function converte_data($data) {
	$acho =  implode(!strstr($data, '/') ? "/" : "-", array_reverse(explode(!strstr($data, '/') ? "-" : "/", $data)));
	return str_replace('2007','2007',$acho);
}

function diasemana($data) {
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);

	$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );

	switch($diasemana) {
		case"0": $diasemana = "Domingo";       break;
		case"1": $diasemana = "Segunda-Feira"; break;
		case"2": $diasemana = "Terça-Feira";   break;
		case"3": $diasemana = "Quarta-Feira";  break;
		case"4": $diasemana = "Quinta-Feira";  break;
		case"5": $diasemana = "Sexta-Feira";   break;
		case"6": $diasemana = "Sábado";        break;
	}
	echo "$diasemana";
}


function insere_db($campos,$valores,$tabela) { //inserir dados no banco
	$inicio="INSERT INTO $tabela(";
	$meio=") VALUES (";
	$fim=")";
	$valor = sizeof($campos);
	$strc="";
	for($i=0;$i <= ($valor-1);$i++){
		$strc.="$campos[$i]";
		if($i != ($valor-1)){
		  $strc.=",";
		}
	 }
	$strv="";
	for($k=0;$k <= ($valor-1);$k++){
		$strv.="\"$valores[$k]\"";
		if($k != ($valor-1)){
		  $strv.=",";
		}
	 }
	$insere="$inicio$strc$meio$strv$fim";
	//echo $insere;
	$foi = consulta_db($insere);
	return $foi;
}

function limita_caracter($string, $qtde){
	$pontos = "(...)";
	$string2 = substr_replace($string, $pontos, $qtde, -1);
	return $string2;
}

function limita_nome_arquivo($arquivo){
	$extensao = explode(".", $arquivo);
	$pontos = "...";
	$string = substr_replace($extensao[0], $pontos.".".$extensao[1], 7, strlen($arquivo));
	return $string;
}

function ajusta_tamanho($arquivo){
	$tamanho = filesize($arquivo)/1024000;
	$string = substr_replace($tamanho, "", 4, strlen($arquivo));
	$string = str_replace(".", ",", $string);
	return $string;
}

function hora_simples($hora){
	$hora_simples = substr("$hora", 0, 5);
	return $hora_simples;
}

?>