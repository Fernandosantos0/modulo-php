<?php

    // todos os scripts devem ter o início de sessão,
    // antes de qualquer output do PHP
    session_start();

    // variáveis que vão ser apresentadas nesta página
    // o valor de $nome e $sobrenome vai ser definido tndo
    // em atenção a existência ou não das variáveis na super global $_SESSION
    $nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
    $sobrenome = !empty($_SESSION['sobrenome']) ? $_SESSION['sobrenome'] : '-';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php require_once 'nav.php' ?>

        <hr>
        <h2>Exercício com sessões de PHP</h2>

        <h3>Valor da variável 'nome':</h3>
        <h1><?= $nome ?></h1>

        <h3>Valor da variável 'sobrenome':</h3>
        <h1><?= $sobrenome ?></h1>

    </body>
</html>