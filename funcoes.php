<?php
//inicia a conexão com dados informados
include "conexao.php";
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
$logado = $_SESSION['login'];
function getAluno($conn) {    
    $sql="SELECT NOME FROM pessoas";
    $result=$conn->query($sql);
    return  $result;
}

?>