<?php
    // OPERADOR TERNÀRIO

    $erro = true;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .erro {
                background-color: red;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="<?php $erro ? 'erro' : '' ?>">RESULTADO</div>

        <!---
        
        O mesmo que:
        <div class="erro">REULTADO</div>

        -->
    </body>
</html>