<?php

    // Para remover uma pasta...
    // rmdir(__DIR__ . '/pasta_teste');

    // Mais um vez, vai aparecer um aviso se a pasta não existe.
    if(file_exists(__DIR__ . '/pasta_teste')) {
        rmdir(__DIR__ . '/pasta_teste'); # comando para remover a pasta ou arquivo
    } 

    // IMPORTANTE: A pasta só pode ser removida se estiver vazia.
    rmdir(__DIR__ . '/data');