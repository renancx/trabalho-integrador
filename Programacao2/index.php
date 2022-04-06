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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <span class="navbar-toggler-icon" onclick="window.location.href='index.php' "></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="lotes.php">Situação dos Lotes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="estoque.php">Consultar Estoque</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="financeiro.php">Controle Financeiro</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!--------------------->
        <h1>Bem vindo, <span>Proprietário</span></h1>
            <p>Essa é a situação atual da sua propriedade:</p>

        <!--Mostrar a data atual-->
        <div class="border">
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