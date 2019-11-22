<?php
//inicia a conexão com dados informados
include "conexao.php";
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

function getAluno($conn) {    
    $idPessoa = $_SESSION['pessoa_id'];
    $sql="SELECT p.nome, a.n1, a.n2, a.media FROM alunos a INNER JOIN pessoas p ON p.PESSOA_ID = a.PESSOA_ID ";
    $sql=$sql."WHERE a.PESSOA_ID = '".$idPessoa."'";

    echo $sql;
    $result=$conn->query($sql);
    return  $result;
}
?>