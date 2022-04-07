<?php
    require_once 'banco.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" href="cadastro.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <div class="text-center container">
            <h1>Realizar o cadastro:</h1>
            <form class="cadastro">
                <p>Informe as credenciais:</p>
                <!--Nome-->
                <div class="form-floating mb-3 text-white">
                    <input type="text" autocomplete="off" class="form-control bg-success" id="floatingInput" placeholder="Nome">
                    <label for="floatingInput">Nome</label>
                </div>
                <!--Email-->
                <div class="form-floating mb-3 text-white">
                    <input type="email" autocomplete="off" class="form-control bg-success" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <!--CPF-->
                <div class="form-floating mb-3 text-white">
                    <input type="text" autocomplete="off" class="form-control bg-success" id="floatingInput" placeholder="Nome">
                    <label for="floatingInput">CPF</label>
                </div>
                <!--Cidade-->
                <div class="form-floating mb-3 text-white">
                    <input type="text" autocomplete="off" class="form-control bg-success" id="floatingInput" placeholder="Nome">
                    <label for="floatingInput">Cidade</label>
                </div>
                <!--Senha-->
                <div class="form-floating text-white">
                    <input type="password" autocomplete="off" class="form-control bg-success" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>
                <p><br><input type="submit" value="Confirmar"></p>
            </form>
            <p>Já possui cadastro?</p>
            <p><a href="login.php">Clique aqui</a></p>
        </div>
    </body>
</html>