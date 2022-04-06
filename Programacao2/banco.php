<?php

    $cn = pg_connect("host=localhost port=5432 dbname=integrador user=postgres password=12345");

    //if($cn) {
    // echo 'connected';
    //}

    //$result = pg_query($cn, "select * from proprietario");
    //while($row = pg_fetch_object($result)) {
    //    echo 'Nome:'.$row->nome_prop. '<br> CPF:'.$row->cpf_prop;
    //}
    //pg_close($cn);




    /*
    $user = 'postgres';
    $password = '12345';

    try{

        $myPDO = new PDO('psql:host=localhost; dbname=integrador', $user, $password);

        if($myPDO) {
            echo 'Connected to postgres';
        }

    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    */
?>