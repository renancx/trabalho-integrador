<?php
    require_once 'banco.php';

    /*
    session_start();
    try {
        if(isset($_POST['enviar'])) {

            $idlote=$_POST['id_lote'];
            $tamanho=$_POST['tam_lote'];
            $data_cheg=$_POST['data_cheg_lote'];
            $data_sair=$_POST['data_venda_lote'];
            $vendido=$_POST['vendido_lote'];

            $comando = $db->prepare('INSERT INTO lote (id_lote, tam_lote, data_cheg_lote, data_venda_lote, vendido_lote) VALUES (:id_lote, :tam_lote, :data_cheg_lote, :data_venda_lote, :vendido_lote)');
            
            $comando->bindParam(':id_lote', $idlote);
            $comando->bindParam(':tam_lote', $tamanho);
            $comando->bindParam(':data_cheg_lote', $data_cheg);
            $comando->bindParam(':data_venda_lote', $data_sair);
            $comando->bindParam(':vendido_lote', $vendido);
            $comando->execute();

            echo 'deu bom (eu acho)';
        }
    }
    catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }*/
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Adicionar novo lote</title>
    </head>
    <body>
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <h1 class="container text-center">Adicionar novo lote</h1><hr><br>
        <div class="card bg-success text-white rounded-bottom container text-center">
            <form action="novolote.php" method="post">
                <span>ID do lote:</span><br><input type="text" name="id_lote"><br><br>
                <span>Tamanho do lote:</span><br><input type="text" name="tam_lote"><br><br>
                <span>Data de chegada:</span><br><input type="text" name="data_cheg_lote"><br><br>
                <span>Data de saída:</span><br><input type="text" name="data_saida_lote"><br><br>
                <span>Vendido?</span><br><input type="text" name="vendido_lote"><br><br>
                <input type="submit" values="enviar" name="enviar"><br>
            </form>
            <a href="http://localhost/trabalho-integrador/Programacao2/lotes.php" class="btn btn-success text-center">Cancelar</a>
        </div>
    </body>
</html>