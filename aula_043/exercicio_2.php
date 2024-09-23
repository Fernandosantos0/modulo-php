<?php

    /*
    1. Constrói um array com todos os resultados da tabuada dos 327.
    2. Apresenta os dados do array com um cilo foreach (apenas os valores)
    */

    $numero_da_tabuada = 327;
    $resultados = array();

    $n = 1;
    do {
        $mult = $numero_da_tabuada * $n;
        array_push($resultados, $mult);
        $n++;
    } while($n <= 10);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <? foreach($resultados as $resultado) : ?>
            <p><?= $resultado; ?></p>
        <? endforeach; ?>

    </body>
</html>