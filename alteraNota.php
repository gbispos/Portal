<?php 
    include "funcoes.php";
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $idPessoa = $_SESSION['pessoa_id'];
    $media=($n1+$n2)/2;
    $sqlQuery = "UPDATE alunos SET n1 = '$n1', n2 = '$n2', media = '$media' WHERE PESSOA_ID = '".$idPessoa."' ";
    $result = $conn->query($sqlQuery);    
    header('location:home.php');
?>