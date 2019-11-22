<?php
//Aluno: Gustavo Bispo - ra00199120
    $Servidor="localhost";
    $Usuario="root";
    $Senha="root";
    $BancoDeDados="bd_projeto";
    $conn = new mysqli($Servidor,$Usuario,$Senha,$BancoDeDados) or die
    ("Sem conexão com o servidor");
    
    if ($conn->connect_errno) {
        printf("Falha na Conexão: %s\n", $mysqli->connect_error);
        exit();
    }
?>