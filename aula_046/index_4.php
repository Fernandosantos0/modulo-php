<?php

    // ESCOPO DE VARIÁVEIS

    /*
    É possível aceder dentro de uma função a uma variável global.
    Fazemos da seguinte forma:
    */

    $nome = 'fernando';

    function dados() {
        global $nome;
        $nome = 'joaquim';
    }

    dados();

    echo $nome;

    // IMPORTANTE: A melhor estratégia passa por usar parâmetros nas funções.