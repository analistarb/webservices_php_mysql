<?php
/*-----------------------------
 - 
 -
 - @author Rafael Barreto
 -
 ------------------------------
*/

ob_clean();

$xml = simplexml_load_file("http://localhost:1234/webservicephp/index.php?id=2");

echo "Id: " . $xml->Id . '<br />';
echo "ProdutoDesc: " . $xml->ProdutoDesc . '<br />';
echo "DataCadastro: " . $xml->DataCadastro . '<br />';
echo "CategoriaId: " . $xml->CategoriaId . '<br />';
echo "CategoriaDesc: " . $xml->CategoriaDesc . '<br />'. '<br />';


echo "Codigo de erro: " . $xml->erro . '<br />';
echo "Mensagem de erro: " . $xml->msgerro . '<br />';


#print_r($xml);


?>