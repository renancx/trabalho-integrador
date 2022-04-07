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
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <h1 class="container text-center">Alterar estoque dos silos:</h1><hr><br>
        <div class="container text-center border bg-success text-white">
            <form>
                <fieldset>
                    <legend>Selecione o tipo da ração:</legend>
                    <input list="opcoes" name="opcoes">
                    <datalist id="opcoes">
                        <option value="Adulto">
                        <option value="Filhote">
                        <option value="Especial">
                    </datalist>
                </fieldset>
                <span>Quantidade adicionada:</span><br><input type="text"><br><br>
            </form>
            <a href="estoque.php" class="container text-center text-dark">Voltar</a>
        </div>
    </body>
</html>