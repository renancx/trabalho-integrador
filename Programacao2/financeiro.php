<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Situação Financeira</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <span class="navbar-toggler-icon" onclick="window.location.href='index.html' "></span>
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
        <h1>Controle Financeiro</h1>
            <div id="consulta" class="border">
                <p>Consultar relatório financeiro:</p>
                <a href="./financeiro/extrato.php">Visualizar</a>
            </div><br>
            <div id="venda" class="border">
                <p>Registrar venda:</p>
                <a href="./financeiro/venda.php">Clique aqui</a>
            </div><br>
            <div id="compra" class="border">
                <p>Registrar compra:</p>
                <a href="./financeiro/compra.php">Clique aqui</a>
            </div>
        </body>
</html>