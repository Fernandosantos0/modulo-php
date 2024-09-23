<?php
    /*
        Ordena por ordem alfabética os produtos do array e apresenta
        os dados numa ul
    */

    $produtos = ['laranja', 'arroz', 'batata', 'feijão', 'castanha', 'uva'];

    # Função para ordenar o array por ordem alfabética
    sort($produtos, SORT_STRING);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
    </head>
    <body>
        
        <? if(sizeof($produtos) > 0): ?>
            <ul>
                <? foreach($produtos as $produto): ?>
                    <li><?= $produto ?></li>
                <? endforeach; ?>
            </ul>
        <? else: ?>
            <p>Nenhum produto cadastrado</p>
        <? endif; ?>
        

    </body>
</html>