<?php
    require('conexao.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome= $_POST['nome'];
        $mensagem= $_POST['mensagem'];
        $email = $_POST['email'];
    
        $sql="INSERT INTO clientes(nome_cliente, email) VALUES ('$nome', '$email');";
        semRetorno($sql);

        $sql_resultado = "SELECT id_cliente FROM clientes WHERE email = '$email';";
        $id_cliente = mysqli_fetch_assoc(comRetorno($sql_resultado));
        $id_final = $id_cliente['id_cliente'];
        $sql_comentario = "INSERT INTO mensagens (id_cliente,mensagem) VALUES ('$id_final','$mensagem');";
        semRetorno ($sql_comentario);
    }
    header ("Access-Control-Allow-Origin: *");
?>