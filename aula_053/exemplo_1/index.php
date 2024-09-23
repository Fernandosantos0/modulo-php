<?php

    # verifica se existe o cookie esperado
    $valor = '[não existe cookie]';
    if(!empty($_COOKIE['meu_cookie'])) {
        $valor = $_COOKIE['meu_cookie'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Cookie</title>
    </head>
    <body>
        
        <?php require_once 'nav.php'; ?>

        <h3>Início</h3>
        <hr>
        <p>Valor do cookie: <?= $valor ?></p>

    </body>
</html>