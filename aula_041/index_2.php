<?php

    // CICLO FOREACH

    /*
    No cenário de PHP embebido em HTML
    */
  
    $nomes = ['fernando', 'joão', 'carlos', 'francisco', 'maria', 'pedro', 'luísa', 'joana'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <div>

            <?php foreach($nomes as $nome) : ?>
                <h2><?= $nome ?></h2>
            <?php endforeach; ?>

        </div>
        
    </body>
</html>