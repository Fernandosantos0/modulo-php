<?php
    session_start();
    unset($_SESSION['sobrenome']);   
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
        <h2>Valor de 'sobrenome' removido á sessão</h2>

    </body>
</html>