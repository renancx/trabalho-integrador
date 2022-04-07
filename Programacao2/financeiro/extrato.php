<?php
    require_once 'dbase.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Extrato Financeiro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <div class="container text-center">
            <h1>Relatório Financeiro</h1>
            <h2>Compras Realizadas:</h2>
        </div><hr><br>
        <div class="container text-center">
            <?php 
                $result = pg_query($cn, "SELECT * FROM compra");
                
                while($row = pg_fetch_object($result)) {
                    echo
                        '<div id="silo1" class="card bg-success text-white border-dark p-3">
                        Valor da compra: R$'.$row->compra_valor. ',00<br> 
                        Data: '.$row->compra_data. '<br>
                        Categoria: '.$row->compra_categ. '<br><br>
                        </div><br>';
                }
            ?>
        <a href="http://localhost/trabalho-integrador/Programacao2/financeiro.php" class="text-dark btn btn-white text-dark container border border-dark">Voltar</a>
        </div>
    </body>
</html>