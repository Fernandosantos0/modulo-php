<?php

    echo '<pre>';

    // listagem de arquivos
    echo __DIR__ . '<br>';
    $files = scandir(__DIR__); // constante mágica __DIR__
    print_r($files);

    /*
    O . e o .. estão sempre presentes em cada pasta.
    São identificados como a pasta atual (.) e a pasta anterior (..)
    */

    // O comando scandir permite lista os arquivos e pastas de um determinado diretório

    echo '<hr>';
    $files2 = scandir('./'); // lista a pasta atual
    print_r($files2);

    echo '<hr>';
    $files3 = scandir('../'); // lista a pasta anterior (mãe)
    print_r($files3);

    // -----------------------------------------
    // Podemos questionar se cada elemento encontado é um ficheiro ou pasta
    echo '<hr>';
    foreach($files as $item) {
        echo is_dir($item) ? 'Arquivo' : 'Pasta'; // is_dir() identifica se é uma pasta
        echo '<br>';
    }

    // -----------------------------------------
    // se quisermos listar apenas os arquivos...
    echo '<br>';
    $files = scandir(__DIR__);
    foreach($files as $item) {
        if(is_file($item)) {
            echo $item . '<br>';
        }
    }