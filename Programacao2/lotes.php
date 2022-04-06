<?php
    require_once 'banco.php';

    //$result = pg_query($cn, "SELECT * FROM lote ORDER BY id_lote ASC LIMIT 6");
    //
    //while($row = pg_fetch_object($result)) {
    //    echo 'ID do lote:'.$row->id_lote. '<br> Tamanho:'.$row->tam_lote. '<br>';
    //}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Visualização dos lotes</title>
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
                      <a class="nav-link active" aria-current="page" href="lotes.php">Situação dos Lotes</a>
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
        <h1>Informações sobre os lotes de suínos:</h1><hr>
        
        <p>Capacidade de lotes da propriedade: 6</p>
        <p><a href="http://localhost/trabalho-integrador/Programacao2/novolote.php">Adicionar novo lote</a></p>
                <?php
                    $result = pg_query($cn, "SELECT * FROM lote ORDER BY id_lote ASC LIMIT 6");
            
                    while($row = pg_fetch_object($result)) {
                    echo 
                    '<div id="lote" class="border">
                    <h3>Lote</h3>',
                        'ID: '.$row->id_lote.'<br>',
                        'Data de chegada: '.$row->data_cheg_lote.'<br>', 
                        'Tamanho do lote: '.$row->tam_lote.' animais'.'<br>',
                        'Data prevista para a saída: '.$row->data_venda_lote.'<br>',
                        '<form method="get" action="./lotes/lote1.php">
                            <button type="submit">Visualizar</button>
                        </form>',
                    '</div><br>';
                    }
                ?>
    </body>
</html>