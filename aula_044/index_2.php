<?php

    // FUNÇÔES

    apresentar();
    executar();

    function apresentar() {
        echo 'Função apresentar<br>';
    }

    function executar() {
        echo 'Função executar';
    }

    // ---------------------------
    for($i = 0; $i <= 10; $i++) {
        funcao_teste();
    }

    function funcao_teste() {
        echo 'Execução da função<br>';
    }

    /*
    Os nomes das funções devem começar por uma letra minúsculas ou maiúscula,
    seguido de letras, algarismos e underscores.

    Nos nomes das funções são case insensitive, ou sejá, ele diferência letras maiúsculas de minúsculas

    apresentar() é igual a APRESENTAR()

    Não podem existir duas funções com o mesmo nome dentro do mesmo namespace

    (Falaremos de namespaces noutro módulo)
    */