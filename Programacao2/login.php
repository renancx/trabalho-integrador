<?php

    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <h1>Realizar login</h1>
            <form class="login">
                <p>Informe as credenciais:</p>
                <div class="form-floating mb-3">
                    <input type="email" autocomplete="off" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" autocomplete="off" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>
                <p><br><input type="submit" value="Login"></p>
            </form>
            <br>
            <p>Ainda não possui cadastro?</p>
            <p><a href="cadastro.php">Clique aqui</a></p>
        </div>
    </body>
</html>