<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Consulta do Estoque</title>
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
                      <a class="nav-link active" aria-current="page" href="estoque.php">Consultar Estoque</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="financeiro.php">Controle Financeiro</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!--------------------->

        <div id="estoque">
            <h1>Situação do estoque de ração:</h1>
            <div id="silo1" class="border">
                <h2>Silo 1</h2>
                <p>Capacidade: <span id="cap_silo1"></span></p>
                
            </div>

            <div id="silo2" class="border">
                <h2>Silo 2</h2>
                <p>Capacidade: <span id="cap_silo2"></span></p>

            </div>
            <a href="gestao.php">Gerenciar Silos</a><br>
            <a href="index.html">Voltar</a>
        </div>
    </body>
</html>