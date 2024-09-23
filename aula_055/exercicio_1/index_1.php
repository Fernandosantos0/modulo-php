<?php

    echo '<pre>';

    // Uma forma muito simples de obter o
    // tamanho de um arquivo em bytes
    $dados = filesize('registros.txt');
    echo $dados . ' bytes';

    // E para obter várias informações sobre
    // um determinado arquivo.
    $info = pathinfo('registros.txt');
    print_r($info);