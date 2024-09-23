<?php

    // OPERADOR DE STRINGS
    // .    .=

    // São operadores específicos para efetuar operações com strings
    // Estamos a falar especiamente de operadores de concatenação.

    $nome = 'Fernando';
    $nome = $nome . ' Santos'; // Fernando Santos
    $apresentacao = 'Bom dia, ' . $nome . '.'; // Bom dia, Fernando Santos.

    // Podemos simplificar uma parte do código acima da seguinte forma
    $nome = 'João';
    $nome .= ' Santos'; // Fernando Santos

    // portanto...
    $cliente = 'Fernando Santos';
    $telefone = '123456789';
    $email = 'fernando.santos@gmail.com';

    $completo = $cliente . ' - ' . $telefone . ' - ' . $email;
    // Fernando Santos - 123456789 - fernando.santos@gmail.com