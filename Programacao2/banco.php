<?php

    $cn = pg_connect("host=localhost port=5432 dbname=integrador user=postgres password=123");
    
    //$result = pg_query($cn, "select * from proprietario");
    //while($row = pg_fetch_object($result)) {
    //    echo 'Nome:'.$row->nome_prop. '<br> CPF:'.$row->cpf_prop;
    //}
    //pg_close($cn);
?>