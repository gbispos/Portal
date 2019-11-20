<?php
    include "conexao.php";
    session_start();
    if ((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)) {        
        header('location:home.php');
    }
    $errouSenha = isset($_GET['errorSenha']) ? true : false;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <nav class="navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://www.pucsp.br/sites/default/files/download/brasao-PUCSP-assinatura-principal-RGB.png" width="30" height="50" class="d-inline-block align-top" alt="">        
            </a>
        <div class="txt-ctr">Portal Acadêmico</div>
        </nav>
        <div class="container d-flex center-ctr">
            <div class="card flex-50">
                <div class="card-body">
                    <form>
                        <div class="form-group ">
                            <label for="exampleInputEmail1"> Email</label>
                            <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="row alinha-botao">
                            <div class="col">
                                <button type="submit" class="btn btn-primary text-center">Acessar</button>
                                <button type="submit" class="btn btn-primary">Esqueceu seu email?</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    </body>
</html>