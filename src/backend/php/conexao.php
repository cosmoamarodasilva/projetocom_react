<?php

    function comRetorno($sql){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "cosmoeletro";
    
    //Criando conexão
    $conexão = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
    
    //verificando conexão
    
    if (!$conexão) {
        die ("A conexão ao BD falhou" . mysqli_connect_error());
    }
    mysqli_set_charset($conexão, "utf8mb4");
    $resultado = mysqli_query($conexão, $sql);
    return $resultado;
    mysqli_close($conexao);
}

    function semRetorno($sql){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "cosmoeletro";
    
    
    //Criando conexão
    $conexão = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
    
    //verificando conexão
    
    if (!$conexão) {
        die ("A conexão ao BD falhou" . mysqli_connect_error());
    }
    mysqli_set_charset($conexão, "utf8mb4");
    mysqli_query($conexão, $sql);
    mysqli_close($conexao);
}

?>