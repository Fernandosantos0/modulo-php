<?php

    // INCLUDE e REQUIRE

    /*
    Imagine o cenário onde você te um conjunto de dados considerável
    e queres definir isso dentro de um script á parte.
    Também  é possível seguindo o seguinte exemplo:
    */

    $nomes = require_once('dados.php');

    echo '<pre>';
    print_r($nomes);