  
<?php
    include_once "funcoes.php";
    $alunoInfo = getAluno($conn);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Área do Aluno</title>
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
            <form  method="POST" action="logout.php">
                <button type="submit" class="btn btn-primary">Sair</button>
            </form>
            <!-- <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Sair
            </a> -->
        </nav>
        <div class="container d-flex center-ctr">
            <div class="card flex-50">
                <div class="card-body">
                <?php 
                if($alunoInfo->num_rows > 0 )
                {
                    while($row = $alunoInfo->fetch_assoc()){
                        
                    ?>

                    <form method="POST" action="login.php">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Aluno:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["nome"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">N1:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["n1"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">N2:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["n2"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Média Final:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["media"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Status:</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php if($row["media"] >= 5){
                                    echo "Aprovado";

                                }else{
                                    echo "Reprovado";
                                } ?>">
                            </div>
                        </div>
                    </form>

                    <?php

                    }
                }
                
                ?>
                </div>
            </div>
        </div>
    </body>
</html>