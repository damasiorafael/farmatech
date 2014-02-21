<?php
	$id = $_REQUEST["id"];
	$id = strtolower(str_replace(" ", "", $id));
	$link = "admin/uploads/".$id;
	//$nome = end(explode($link, "/"));
	header ("Content-Disposition: attachment; filename=".$id."");
	header ("Content-Type: application/octet-stream");
	header ("Content-Length: ".filesize($link));
	readfile($link);
?>