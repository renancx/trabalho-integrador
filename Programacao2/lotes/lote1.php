<?php
    require_once 'bd.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Lote</title>
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <h1 class="text-center container">Atualizar informações do lote:</h1><hr><br>

        <div class="container text-center border bg-success text-white">
            <form method="post">
                <span>Data de chegada</span><br><input type="text"><br><br>
                <span>Data de saída</span><br><input type="text"><br><br>
                <span>Tamanho do lote</span><br><input type="text"><br><br>
                <input type="checkbox"><span> Vacina aplicada</span><br><br>
                <input type="submit" values="enviar"><br>
            </form>
            <a href="http://localhost/trabalho-integrador/Programacao2/lotes.php" class="text-center btn btn-success">Voltar</a>
        </div>
    </body>
</html>