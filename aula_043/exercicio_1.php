<?php

    /*
    Constrói uma apresentação em HTML que mostra a tabuada dos 5
    exemplo:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    ...
    5 x 10 = 50
    */

    $tabuada = 5;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <h3>Tabuada de <?= $tabuada ?></h3>

        <?php for($n = 1; $n < 11; $n++) : ?> 
            <p><?= "$tabuada x $n = " . ($tabuada * $n) ?></p>
        <?php endfor; ?>

    </body>
</html>