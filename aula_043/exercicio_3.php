<?php

    /*
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
    */

    $nomes = ['joão', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo', 'washington', 'fernando', 'joana', 'bianca', 'beatriz'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <? foreach($nomes as $indice => $nome) : ?>
            
            <? if($indice == 4) : ?>
                <? continue; ?>
            <? endif; ?>

            <p><?= $nome ?></p>

        <? endforeach; ?>

    </body>
</html>