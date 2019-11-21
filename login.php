<?php 
    include "funcoes.php";
    session_start();
    $login = $_POST['username'];
    $senha = $_POST['senha'];

    $sqlQuery = "SELECT * FROM pessoas WHERE EMAIL = '$login' AND SENHA = '$senha'";
    $result = $conn->query($sqlQuery);
    var_dump($result);
    if($result->num_rows > 0 )
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:home.php');
    } else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php?errorSenha=true');
    }
?>