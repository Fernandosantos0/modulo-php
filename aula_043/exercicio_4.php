<?php

    /*
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto vermelho
    */

    $nomes = ['joão', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo', 'washington', 'fernando', 'joana', 'bianca', 'beatriz'];

    $bool_estilo = false;

?>

<!DOCTYPE html>
<html lang="pt-be">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css" rel="stylesheet">
            .vermelho {
                color: red;
            }
        </style>
    </head>
    <body>

            <?php foreach($nomes as $nome): ?>

                <?php if($nome === 'maria') $bool_estilo = true; ?>

                <?php if($bool_estilo): ?>
                    <h3 class="vermelho"><?= $nome; ?></h3>
                <?php else: ?>
                    <h3><?= $nome; ?></h3>
                <?php endif; ?>

            <?php endforeach; ?>
        
    </body>
</html>