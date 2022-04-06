<?php
    require_once 'banco.php';

    $authenticated=false;
    if(isset($_POST['verify']) && $_POST['verify']=="Login") {

        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        if($cn) {
            $query="select * from verify($1,$2)";
            $res=pg_query_params($cn,$query,array($email,$pwd));

            $result=pg_fetch_object($res);
            if($result){
                $authenticated=$result->verify==1;
            }
        }
        if(!$authenticated) {
            //echo 'Not valid';
        }
        else{
            header('location:http://localhost/trabalho-integrador/Programacao2/index.php');
        }
    }

    /*
    $result = pg_query($cn, "select * from proprietario");

    $teste = pg_query($cn, "select * from verify('Renan', '123')");
      
    while($row = pg_fetch_object($result)) {
        echo 'Nome:'.$row->nome_prop. '<br> Senha:'.$row->senha_prop;
        echo 'Nome:'.$row->nome_prop. '<br> CPF:'.$row->cpf_prop;
    }  */
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
            <form class="login" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <p>Informe as credenciais:</p>
                <div class="form-floating mb-3">
                    <input type="text" autocomplete="off" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" autocomplete="off" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                    <label for="floatingPassword">Senha</label>
                </div>
                <p><br><input type="submit" value="Login" name="verify"></p>
            </form>
            <br>
            <p>Ainda não possui cadastro?</p>
            <p><a href="cadastro.php">Clique aqui</a></p>
        </div>
    </body>
</html>