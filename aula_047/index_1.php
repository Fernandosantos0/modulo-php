<?php

    // INCLUDE e REQUIRE

    /*
    Tradicionalmente uma aplicação de PHP pode conter dezenas de scripts que,
    combinados entre si, permitem executar as operações desejadas
    Até agora vimos scripts isolados.
    Podemos separar o código entre vários scripts e, no momento da execução,
    "importante" o código para o interior da nossa aplicação.

    Existem 4 formas de executar esta tarefa:
        include
        include_once
        require
        require_once
    */

    // ---------------------------------------
    // INCLUDE
    include('script.php');
    include 'outro.php';    // o arquivo não existe. Vai aparecer um aviso.
    include 'script.php';

    /*
    Principal diferença entre o include e o require:
    include - Mostra aviso se o script não existe e permite continuar a execução.
    require - Mostra um erro se o script não existe e interrompe a execução.
    */
