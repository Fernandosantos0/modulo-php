<?php
    # Sessão em PHP
    session_name('session_name_php');
    session_set_cookie_params(time() + (60 * 60 * 24 * 7));
    session_start();

    unset($_SESSION['lastname']);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sessão</title>        
        <link rel="stylesheet" href="./css/estilos.css">
    </head>
    <body>
        <?php require_once('./navbar.php'); ?>

        <h2>Sessão lastname removido com sucesso</h2>

        <a href="javascript:window.history.go(-1)">Voltar</a>
    </body>
</html>