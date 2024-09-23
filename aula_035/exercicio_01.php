<?php
    /*
        Usando como ponto de partida o array de produtos,
        apresenta no HTML uma Unordered List (ul) contendo
        todos os produtos do array
    */

    $produtos = ['arroz', 'batata', 'laranja', 'melância', 'banana', 'manga', 'abacaxi', 'uva', 'acerola', 'limão']

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
    </head>
    <body>
        
        <?php if(count($produtos) > 0): ?>

            <ul>
                <?php foreach($produtos as $produto): ?>
                    <li><?= $produto ?></li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
        

    </body>
</html>