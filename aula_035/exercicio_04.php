<?php

    /*
        constrói a lógica codicional que permite apresentar apenas 
        o parágrafo corespondente ao valor da variável $nome
    */

    $nome = 'Pedro';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 4</title>
    </head>
    <body>
        
        <?php if($nome == 'João'): ?>
            <p>O nome é João</p>
        <?php elseif($nome == 'Ana'): ?>
            <p>O nome é Ana</p>
        <?php elseif($nome == 'Carlas'): ?>
            <p>O nome é Carlas</p>
        <?php else: ?>
            <p>É um nome desconhecido</p>
        <?php endif; ?>
    </body>
</html>