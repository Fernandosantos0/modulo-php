<?php

    /*
        Uma empresa tem várias lojas, cada uma com um endereço de email.
        A variável $cidade indica que dados de email deverão ser apresentados.
        Constrói a lógica condicional e de apresentação do email correspondente
        quando é alterado o valor da cidade escolhida.
    */

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'curitiba';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 5</title>
    </head>
    <body>
        
        <?php if(key_exists($cidade, $lojas)) : ?>
            <h3><?= ucfirst($cidade) ?></h3>
            <p><?= $lojas[$cidade] ?></p>
        <?php else: ?>
            <!-- quando não existe cidade na oleção das $lojas -->
            <p>Não existe nenhuma loja na cidade indicada.</p>
        <?php endif; ?>
            
    </body>
</html>