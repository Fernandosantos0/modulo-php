<?php

    // ---------------------------
    // podemos criar e remover pastas
    # mkdir(__DIR__ . '/pasta_teste');

    // Se a pasta existir, vai aparecer um aviso.
    // Devemos sempre assegurar se a pasta ou arquivo existe.
    // Para isso podemos usar a função file_exists().
    // Funciona para arquivos e pastas

    if(!file_exists(__DIR__ . '/pasta_teste')) {
        mkdir(__DIR__ . '/pasta_teste');
    }

    echo __FILE__ . '<br>';
    echo __LINE__;
