<?php
    require_once 'banco.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Integrador</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>

        <h1 class="container text-center">Bem vindo, <span>Proprietário</span></h1><hr>
        <div class="container text-center">
            <h5 class="bg-success text-white rounded">Gerencie a sua propriedade:</h5>
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-header bg-success text-white">Gestão dos lotes</div>
                    <div class="card-body">
                        <h5 class="card-title">Monitoramento</h5>
                        <p class="card-text">Consulte e controle a situação dos lotes de suínos de sua propriedade.</p>
                        <a href="lotes.php" class="btn btn-success">Clique aqui</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card-header bg-success text-white">Gerenciar Estoque</div>
                    <div class="card-body">
                        <h5 class="card-title">Administração</h5>
                        <p class="card-text">Controle o estoque de ração de sua propriedade.</p>
                        <a href="estoque.php" class="btn btn-success">Clique aqui</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card-header bg-success text-white">Situação Financeiro</div>
                    <div class="card-body">
                        <h5 class="card-title">Controle</h5>
                        <p class="card-text">Gerencie as compras e vendas realizadas na propriedade.</p>
                        <a href="financeiro.php" class="btn btn-success">Clique aqui</a>
                    </div>
                </div>        
            </div>
        </div><br><br>
        <br>
        <br><br>
        <!--Mostrar a data atual-->
        <br><br>
        <div class="border card container text-center w-25 bg-success text-white border-dark">
            <h3>Data de hoje:</h3>
            <div id="current_date">
                <script>
                    date=new Date();
                    year=date.getFullYear();
                    month=date.getMonth() + 1;
                    day=date.getDate();
                    document.getElementById("current_date").innerHTML=day + "/" + month + "/" + year;
                </script>
            </div>
        </div>
        <!--------------------->
    </body>
</html>