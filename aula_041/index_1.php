<?php

    // CICLO FOREACH

    /*
    É a melhor opção para iterações em arrays ou objetos.
    (falaremos de objetos noutro módulo de PHP)

    foreach([array] as $value ou %key => $value) {
        # código
    }

    */

    $nomes = ['joão', 'ana', 'carlos', 'francisco', 'maria', 'fernando', 'joana', 'pedro', 'luíza', 'giovanna'];
    foreach($nomes as $nome) {
        echo "$nome<br>";
    }

    echo '<hr>';

    $posicoes = [
        'administrador' => 'joao',
        'secretario' => 'ana',
        'colaborador' => 'carlos'
    ];

    $posicoes['contador'] = 'Pedro';

    foreach($posicoes as $chave => $valor) {
        echo "Com a posição de $chave, temos a seguinte pessoa: $valor<br>";
    }

    // no final da execução, a variável $valor e $chave vão permanecer disponíveis
    echo "<hr>$valor<br>$chave"
?>