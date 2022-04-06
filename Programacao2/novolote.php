<?php
    //require_once 'banco.php';


    
    if(isset($_POST['btnSave']) && $_POST['btnSave']=='Save') {

        $cn = pg_connect("host=localhost port=5432 dbname=integrador user=postgres password=12345");

        $result = pg_query($cn, "SELECT * FROM lote");

        $idlote=$_POST['idlote'];
        $tamanho=$_POST['tam'];
        $data_cheg=$_POST['cdata'];
        $data_sair=$_POST['vdata'];
        $vendido=$_POST['vendido'];

        $query="call add_product('.$idlote.','.$tamanho.','.$data_cheg.','.$data_sair.','.$vendido.')";
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
        <span>ID do lote:  </span><input type="text" name="id_lote"><br><br>
        <span>Tamanho do lote:  </span><input type="text" name="tam_lote"><br><br>
        <span>Data de chegada:  </span><input type="text" name="data_cheg_lote"><br><br>
        <span>Data de saída:  </span><input type="text" name="data_saida_lote"><br><br>
        <span>Vendido?  </span><input type="text" name="vendido_lote"><br>
        <input type="submit" values="Save" name="btnSave">
    </body>
</html>