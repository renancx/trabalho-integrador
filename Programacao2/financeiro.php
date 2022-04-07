<?php
    require_once 'banco.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Situação Financeira</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
            <span class="navbar-toggler-icon" onclick="window.location.href='index.php' "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="lotes.php">Situação dos Lotes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="estoque.php">Consultar Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="financeiro.php">Controle Financeiro</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--------------------->
        <h1 class="container text-center">Controle Financeiro</h1><hr><br>
            <div id="venda" class="border-dark container text-center bg-success text-white w-50">
                <h4>Registrar venda:</h4>
                <a href="http://localhost/trabalho-integrador/Programacao2/financeiro/venda.php" class="border border-dark text-white btn btn-success">Clique aqui</a>
            </div><br>

            <div id="consulta" class="border-dark container text-center bg-success text-white w-50">
                <h4>Vendas realizadas:</h4>
                <a href="http://localhost/trabalho-integrador/Programacao2/financeiro/vendas.php" class="border border-dark text-white btn btn-success">Visualizar</a>
            </div><br><br><br>

            <div id="compra" class="border-dark container text-center bg-success text-white w-50">
                <h4>Registrar compra:</h4>
                <a href="http://localhost/trabalho-integrador/Programacao2/financeiro/compra.php" class="border border-dark text-white btn btn-success">Clique aqui</a>
            </div><br>

            <div id="consulta" class="border-dark container text-center bg-success text-white w-50">
                <h4>Compras realizadas:</h4>
                <a href="http://localhost/trabalho-integrador/Programacao2/financeiro/extrato.php" class="border border-dark text-white btn btn-success">Visualizar</a>
            </div><br>
        </body>
</html>