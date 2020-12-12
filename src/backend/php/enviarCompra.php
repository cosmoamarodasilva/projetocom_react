<?php

    require("conexao.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_cliente = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_produto = $_POST['nome_produto'];
        $valor_unitario = $_POST['valor_uni'];
        $valor_total = $_POST['valor_total'];
        $quantidade = $_POST['quantidade'];

        $sql = "INSERT INTO pedidos (nome_cliente, endereco, telefone, nome_produto, valor_uni, valor_total, quantidade) VALUES ('$nome_cliente', '$endereco', '$telefone', '$nome_produto', '$valor_unitario', '$valor_total', '$quantidade');";
        semRetorno($sql);

    }
    
    header ("Access-Control-Allow-Origin: *");
?>