<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbDataBase = 'login';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDataBase);

    
    if($conexao->connect_errno) {
        echo('ERRO!');
    } else {
        echo('Conexão efetuada com sucesso!');
    }
    
?>