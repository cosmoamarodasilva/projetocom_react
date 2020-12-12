<?php
    require ("conexao.php");
    $sql = "SELECT nome_cliente, mensagem FROM mensagens JOIN clientes ON clientes.id_cliente = mensagens.id_cliente LIMIT 5;";
    $resultado = comRetorno ($sql);
    $mensagens = [];
    while ($linha = mysqli_fetch_assoc($resultado)){
        $mensagens[] = $linha; 
    } 
    header ('Access-Control-Allow-Origin: *');
    print_r (json_encode ($mensagens));
    
?>