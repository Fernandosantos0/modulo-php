<?php
    # Sessão em PHP
    session_name('session_name_php');
    session_set_cookie_params(time() + (60 * 60 * 24 * 7));
    session_start();

    $nome = empty($_SESSION['name']) ? '-' : $_SESSION['name'];
    $sobrenome = empty($_SESSION['lastname']) ? '-' : $_SESSION['lastname'];
    $idade = empty($_SESSION['age']) ? '-' : $_SESSION['age'];

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

        <h1>Sessão em PHP</h1>

        <h3>O valor da session name é:</h3>
        <p><?= $nome ?></p>
        <hr>

        <h3>O valor da session lastane é:</h3>
        <p><?= $sobrenome ?></p>
        <hr>

        <h3>O valor da session age é:</h3>
        <p><?= $idade ?></p>

    </body>
</html>