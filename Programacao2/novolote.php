<?php
    require_once 'banco.php';

    if (isset($_POST['enviar'])) {
        $id_lote = $_POST['id_lote'];
        $tam_lote = $_POST['tam_lote'];
        $data_cheg_lote = $_POST['data_cheg_lote'];
        $data_venda_lote = isset($_POST['data_venda_lote']) ? $_POST['data_venda_lote'] : null; // Verifica se 'data_venda_lote' está definido
        $vendido_lote = $_POST['vendido_lote'];
    
        // Verifica se 'data_venda_lote' é uma data válida
        if ($data_venda_lote && strtotime($data_venda_lote)) {
            $result = pg_query($cn, "INSERT INTO lote (id_lote, tam_lote, data_cheg_lote, data_venda_lote, vendido_lote) VALUES ('$id_lote', '$tam_lote', '$data_cheg_lote', '$data_venda_lote', '$vendido_lote')");
            
            if ($result) {
                echo 'Dados inseridos com sucesso!';
            } else {
                echo 'Erro ao inserir os dados!';
            }
        } else {
            echo 'Data de venda inválida!';
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
        <!--barra de navegacao-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success"></nav><br>
        <!---------------------->
        <h1 class="container text-center">Adicionar novo lote</h1><hr><br>
        <div class="card bg-success text-white rounded-bottom container text-center">
            <form action="novolote.php" method="post">
                <span>ID do lote:</span><br><input type="text" name="id_lote"><br><br>
                <span>Tamanho do lote:</span><br><input type="text" name="tam_lote"><br><br>
                <span>Data de chegada:</span><br><input type="text" name="data_cheg_lote"><br><br>
                <span>Data de saída:</span><br><input type="text" name="data_venda_lote"><br><br>
                <span>Vendido?</span><br><input type="text" name="vendido_lote"><br><br>
                <input type="submit" values="enviar" name="enviar"><br>
            </form>
            <a href="http://localhost/trabalho-integrador/Programacao2/lotes.php" class="btn btn-success text-center">Cancelar</a>
        </div>
    </body>
</html>