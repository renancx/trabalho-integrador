<?php
    //require_once 'banco.php';

    
    if(isset($_POST['btnSave']) && $_POST['btnSave']=='Save') {

        $cn = pg_connect("host=localhost port=5432 dbname=integrador user=postgres password=12345");

        $tamanho=$_POST['tam_lote'];
        $data_cheg=$_POST['data_cheg_lote'];
        $data_sair=$_POST['data_saida_lote'];
        $query="call add_product(".$tamanho.",".$data_cheg.",".$data_sair.")";
        $res = pg_query($cn,$query);
        if($res) {
            echo 'Saved';
        }
        else {
            echo 'error';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Adicionar novo lote</title>
    </head>
    <body>
        <h1>Adicionar novo lote</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <span>Tamanho do lote:  </span><input type="text" name="tam_lote"><br><br>
        <span>Data de chegada:  </span><input type="text" name="data_cheg_lote"><br><br>
        <span>Data de saída:  </span><input type="text" name="data_saida_lote"><br>
        <input type="submit" values="Save" name="btnSave">
    </body>
</html>