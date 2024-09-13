<?php

    // FLOATS

    // Tal coo os inteiros, o valor mínimo e máximo depende da plataforma (arquitetura do cpu)
    // 32 ou 64 bits

    echo PHP_FLOAT_MIN;
    echo '<br>';
    echo PHP_FLOAT_MAX;
    echo '<br>';

    // Infinity - INF - O valor é demasiado elevado para ser apresentado
    $valor = PHP_FLOAT_MAX * 2;
    echo $valor;
    echo '<br>';
    var_dump($valor);

    // converter para float
    echo '<br>';
    $valor = 10;
    $valor_float = (float)$valor;
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);