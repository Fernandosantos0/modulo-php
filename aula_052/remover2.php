<?php
    session_name('minha_sessao'); # Definido o nome da sessão
    session_set_cookie_params(60 * 3); # definido o tempo de expiração da sessão
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