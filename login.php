<?php 
    include "funcoes.php";
    // session_start inicia a sessão
    session_start();
    $login = $_POST['username'];
    $senha = $_POST['senha'];
    // A variavel $result pega as varias $login e $senha, faz uma 
    //pesquisa na tabela de usuarios
    $sqlQuery = "SELECT * FROM pessoas WHERE EMAIL = '$login' AND SENHA = '$senha'";
    $result = $conn->query($sqlQuery);
    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
    bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
    será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
    resultado ele redirecionará para a página site.php ou retornara  para a página 
    do formulário inicial para que se possa tentar novamente realizar o login */
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