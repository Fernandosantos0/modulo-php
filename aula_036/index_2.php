<?php

    // EXPRESSÃO CONDICIONAL

    // podemos agrupar vários valores em análise para
    // execução do mesmo bloco de código.

    $estado_encomenda = 'em processamento';

    switch($estado_encomenda) {
        case 'em processamento':
        case 'em analise':
            # código
            break;

        case 'anulada':
        case 'cancelada':
        case 'inválida':
            # código
            break;

        case 'enviada':
            # código
            break;

        default:
            # code...
            break;
    }