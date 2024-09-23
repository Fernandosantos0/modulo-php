<?php

    /*
    Em muitas circunstância vais necessitar de um modo diferente 
    de leitura dos dados. Ler uma linha de cada vez, por exemplo.
    */

    # fopen - abrir arquivo
    # feof - final do arquivo
    # fgets -vai buscar as linhas do arquivos
    # fclose - liberar o arquivo (fechar)

    $file = fopen('dados.txt', 'r');
    while(!feof($file)) {
        echo fgets($file) . '<br>';
    }
    fclose($file);

    // ou
    echo '<hr>';
    $file = fopen('dados.txt', 'r');
    while(($linha = fgets($file)) !== false) {
        echo $linha . '<br>';
    }
    fclose($file);