<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Visualização dos lotes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="lotes.php">Situação dos Lotes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="estoque.php">Consultar Estoque</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="financeiro.php">Relatório Financeiro</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <h1>Informações sobre os lotes de suínos:</h1><hr>
        <p>Quantidade de lotes atual:<span class="qtd_lotes"> 12</span></p>
        <h4>Lotes atuais:<h4>
            <div id="lote" class="border">
                <h4>Lote 1</h4>
                <p>ID: <span id="idlote1">1234</span></p>
                <p>Data de chegada: <span>27/03/2022</span></p>
                <p>Quantidade: <span>175</span></p>
                <p>Data da vacina: <span>07/04/2022</span></p>
                <p>Data de saída: <span>28/04/2022</span></p>
                <form method="get" action="./lotes/lote1.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
            <div id="lote" class="border">
                <h4>Lote 2</h4>

                <form method="get" action="./lotes/lote2.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
            <div id="lote" class="border">
                <h4>Lote 3</h4>

                <form method="get" action="./lotes/lote3.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
            <div id="lote" class="border">
                <h4>Lote 4</h4>

                <form method="get" action="./lotes/lote4.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
            <div id="lote" class="border">
                <h4>Lote 5</h4>

                <form method="get" action="./lotes/lote5.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
            <div id="lote" class="border">
                <h4>Lote 6</h4>

                <form method="get" action="./lotes/lote6.html">
                    <button type="submit">Visualizar</button>
                </form>
            </div>
    </body>
</html>