<?php
include("conexao.php");

$tabela= $_GET["table"];
$sql = "select * from $tabela";
$resultado = comRetorno($sql);

header ("Access-Control-Allow-Origin: *");
print_r( json_encode( $resultado->fetch_all(MYSQLI_ASSOC)) );

header('Content-Type: application/json');

?>