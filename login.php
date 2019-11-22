<?php 
//Aluno: Gustavo Bispo - ra00199120
    include "funcoes.php";
    session_start();
    $login = $_POST['username'];
    $senha = $_POST['senha'];

    $sqlQuery = "SELECT * FROM pessoas WHERE EMAIL = '$login' AND SENHA = '$senha'";
    $result = $conn->query($sqlQuery);    
    if($result->num_rows > 0 )
    {
        $_SESSION['login'] = $login;        
        $_SESSION['senha'] = $senha;

        while($row = $result->fetch_assoc()){
            $_SESSION['pessoa_id'] = $row["PESSOA_ID"];            
        }

        header('location:home.php');
    } else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php?errorSenha=true');
    }
?>