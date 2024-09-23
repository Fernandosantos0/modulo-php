<?php

    /*
    Apresenta a frase 10 vezes, com uma opacidade cada vez MENOR até  quase invisível

    É um exercício de utilização de um ciclo para repetir um texto e, ao mesmo tempo 
    alterar o valor da opacidade do estilo da letra.

    Deve usar o atributo style para o efeito visual
    */

    $frase = 'Esta frase vai aparecer com diferentes opacidades.';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <? for($i = 10; $i >= 0; $i--): ?>
            <h3 style="opacity: <?= $i / 10; ?>"><?= $frase; ?></h3>
        <? endfor; ?>

    </body>
</html>