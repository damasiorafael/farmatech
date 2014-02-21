<?php include("../../../inc/config.php"); ?>
<?php

    $q = strtolower($_GET["q"]);
    if (!$q) return;

	$sql = "SELECT
            p_produto.id_pprodutos,
            p_produto.codigo,
            p_produto.descricao
            FROM
            p_produto
            WHERE
            p_produto.visivel =  '1'
            AND 
            (descricao LIKE UCASE('%$q%') OR codigo LIKE '%$q%' )
            ";
	$query = mysql_query($sql);
	while($row = mysql_fetch_array($query)) {
	   $items["(" . $row["codigo"]. ") " . $row["descricao"]] = $row["id_pprodutos"]; 
       //echo "(" . $row["codigo"]. ") " . $row["descricao"]."|".$row["id_pprodutos"]."\n";
    }  
   // print_r($itens);
   foreach ($items as $key=>$value) {
    	if (strpos(strtolower($key), $q) !== false) {
    		echo "$key|$value\n";
    	}
   }

?>