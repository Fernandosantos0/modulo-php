<?php

    // CICLO FOR

    // no contexto do PHP  embebido no HTML

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css" rel="stylesheet">
            .card {
                border: 1px solid black;
                border-radius: 10px;
                padding: 10px;
                margin: 5px;
                background-color: rgb(200, 200, 200);
            }
        </style>
    </head>
    <body>

            <?php for($i = 1; $i <= 10; $i++) : ?>
                <div class="card">
                    <h3>Título <?= $i ?></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate nostrum, nobis, placeat porro adipisci ut eos corrupti veritatis, ratione non similique? Officiis error voluptate pariatur iste neque minus incidunt temporibus.</p>
                </div>
            <?php endfor; ?>
        
    </body>
</html>