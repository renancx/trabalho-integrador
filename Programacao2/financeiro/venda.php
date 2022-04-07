<?php
    require_once 'dbase.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrar venda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <h1 class="container text-center">Registrar nova venda</h1><hr><br>
        <div class="card bg-success text-white rounded-bottom container text-center">
            <form method="post">
                <span>Valor da venda:</span><br><input type="text"><br><br>
                <span>Data:</span><br><input type="text"><br><br>
                <span>Categoria:</span><br><input type="text"><br><br>
                <input type="submit" values="enviar"><br>
            </form>
            <a href="http://localhost/trabalho-integrador/Programacao2/financeiro.php" class="btn btn-success text-center">Cancelar</a>
        </div>
    </body>
</html>