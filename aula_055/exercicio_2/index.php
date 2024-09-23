<?php

    /*
    Vamos a um pequeno exercício prático onde vamos 
    implementar várias matérias estudadas até ao momento.
    Vamos guardar dentro de um arquivo de texto
    a tabuada do 3 até à multiplicação por 1000
    3 x 1 = 3 ... 3 x 1000 = 3000
    */

    $path = __DIR__ . '/tabuada.txt';
    $tabuada = 3;

    if(!file_exists($path)) {
        $i = 1;
        while($i <= 1000) {
            $mult = 3 * $i;
            $result = "{$tabuada} x {$i} = {$mult}" . PHP_EOL;

            file_put_contents($path, $result, FILE_APPEND);

            $i++;
        }

        echo "<p style='color: green;'>Tabuada de {$tabuada} criado com sucesso.</p>";
        return; 
    } 
    
    echo "<p style='color: red;'>Tabuada já existe.</p>";
