<?php
    
    // BREAK e CONTINUE

    // CONTINUE - permite passar de imediato para a iteração seguinte

    $nomes = ['joão', 'maria', 'ana', 'paulo', 'vitor', 'francisco', 'joana', 'carlos'];
    $ignorar = 'carlos';
    foreach($nomes as $nome) {

        if($nome == $ignorar) continue;
        echo "$nome<br>";

    }