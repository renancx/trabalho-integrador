<?php
    require_once 'banco.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Consulta do Estoque</title>
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
        <h1 class="container text-center">Situação do estoque de ração:</h1><hr><br>
        
        <div id="estoque" class="container text-center">
            <?php
                $result = pg_query($cn, "SELECT * FROM racao ORDER BY cod_racao ASC LIMIT 4");
            
                while($row = pg_fetch_object($result)) {
                    echo '
                    <div id="silo1" class="card bg-success text-white border-dark">
                        <h2 class="card bg-success">Silo</h2>
                            Quantidade disponível: '.$row->qtd_estoq. ' Kgs<br> 
                            Ração para animal '.$row->tipo_racao. '<br>
                    </div><br>';
                }
            ?>
            <br>
            <a href="gestao.php" class="text-dark">Gerenciar Silos</a><br>
        </div>
    </body>
</html>