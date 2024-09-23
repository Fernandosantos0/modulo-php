<?php

    // ARRAYS MULTIDIMENSIONAIS
    // são arrays que contém outras arrays

    $lojas = [
        'brasilia' => [
            'telefone' => '12345',
            'email' => 'brasilia@gmail.com'
        ],
        'curitba' => [
            'telefone' => '345678',
            'email' => 'curitiba@gmail.com'
        ],
        'florianopolis' => [
            'telefone' => '457895',
            'email' => 'florianopolis@gmail.com'
        ],
        'goiania' => [
            'telefone' => '878885',
            'email' => 'goiania@gmail.com'
        ]
    ];

    echo '<pre>';
    print_r($lojas);
    echo '</pre>';

    // apresentar um valor específico
    echo $lojas['brasilia']['telefone'];

    // nos arrays com indices numéricos, também podemos ter multidimensão
    $notas = [
        [10, 20, 30],
        [100, 200, 300],
        [1000, 2000, 3000]
    ];

    echo '<pre>';
    print_r($notas);
    echo '</pre>';


    echo $notas[2][0]; // 1000