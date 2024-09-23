<?php

    // ARRAYS

    // Como podemos adicionar e remover valores?

    $nomes = ['fernando', 'ana', 'paulo'];
    
    // adicionar (push)
    $nomes[] = 'novo nome';
    // $nomes = ['fernando', 'ana', 'paulo', 'novo nome'];

    // ou
    array_push($nomes, 'pedro');
    array_push($nomes, 'rui', 'carla', 'josé', 'marta');

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // remover elemento (a chave vai desaparecer)
    unset($nomes[5]);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // remover elemeto (a chave vai desaparecer);
    unset($nomes);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // existem dezenas de funções para operar arrays
    // iremos abordando cada uma delas á medida da necessidade