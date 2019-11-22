<?php
//Aluno: Gustavo Bispo - ra00199120
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('location:../../../index.php');    
?>