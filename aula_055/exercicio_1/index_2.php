<?php

    echo '<pre>';

    /*
    Uma das formas mais diretas de criar e escrever
    informação num arquivo é recorrendo á função
    file_put_contents()
    */

    // Se o arquivo não existe, é criado.
    // O conteúdo vai ser esmagado.
    file_put_contents('file1.txt', 'texto do arquivo');

    // se pretendemos adicionar informação ao mesmo
    // arquivo, usamos o terceiro argumento.
    file_put_contents('file2.txt', time() . PHP_EOL, FILE_APPEND);
    echo 'terminado';