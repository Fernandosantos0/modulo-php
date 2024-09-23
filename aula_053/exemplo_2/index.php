<?php

    // Neste exemplo muito simples, vamos usar um cookie
    // para definir o tema claro ou escuro do nosso site

    // verifica se existe um cookie com o tema
    $theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css" rel="stylesheet" media="all">
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .light {
                background-color: white;
                color: black;
            }

            .dark {
                background-color: black;
                color: white;
            }

            a {
                color: red;
            }
        </style>
    </head>
    <body class="<?= $theme ?>">
        
        <a href="theme_dark.php">Dark mode</a> | <a href="theme_light.php">Light mode</a>
        <h1>Exemplo simples de tema com cookie</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio atque adipisci vel temporibus sequi officiis iusto, quos neque? Temporibus nisi magni labore enim autem adipisci itaque. Aspernatur sunt atque voluptatem.</p>

    </body>
</html>