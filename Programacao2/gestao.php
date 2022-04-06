<?php
    require_once 'banco.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gerenciar Silos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h1>Alterar estoque dos silos:</h1>
        
        <h2>Selecione o silo:</h2><br>
        <div class="border">
            <h3>Tipo da ração: <span id="tipo_silo1">Adulto</span></h3>
            <p>Quantidade adicionada:</p>
            <p>Quantidade removida:</p>
        </div>

        <div class="border">
            <h3>Tipo da ração: <span id="tipo_silo2">Filhote</span></h3>
            <p>Quantidade adicionada:</p>
            <p>Quantidade removida:</p>
        </div>

        <a href="estoque.php">Voltar</a>
    </body>
</html>