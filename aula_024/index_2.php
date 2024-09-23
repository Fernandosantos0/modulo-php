<?php

    // FUNÇÕES ASSOCIADAS A ARRAYS

    $cliente = [
        'nome' => 'joão',
        'sobrenome' => 'ribeiro',
        'idade' => 48,
        'email' => 'joão@gmail.com'
    ];

    // apresentar um valor de um array associativo
    echo $cliente['sobrenome'];

    // verificar se existe uma determinada key no array
    var_dump(key_exists('telefone', $cliente)); // bool(false)

    // array para string
    $resultado = implode(',', $cliente);
    var_dump($resultado); // 'joão,ribeiro, 48,joão@gmail.com'

    // criar um array a partir de uma porção de outro array
    $nomes = ['joão', 'ana', 'carlos', 'francisco', 'cristiana'];
    $nomes_parte = array_slice($nomes, 2); // ['carlos', 'francisco', 'cristina']

    // funções para arrays em PHP:
    // https://www.php.net/manual/en/ref.array.php