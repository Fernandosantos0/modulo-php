<?php
    /*
        Usando como ponto de partida o array de produtos,
        inverte a ordem dos mesmos, acrescenta no final
        'maçã' e 'pêra' e apresenta numa ul
    */

    $produtos = ['arroz', 'batata', 'laranja'];

    $produtos = array_reverse($produtos);
    
    array_push($produtos, 'maçã', 'pêra');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
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