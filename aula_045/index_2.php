<?php

    // PARâMETROS DE UMA FUNÇÃO

    /*
    Podemos definir parâmetros opcionais dentro de uma função.
    São parâmetros que já têm um valor padrão atribuído.
    Se passarmos uma argumento para esse parâmetro, o valor passado será usado.

    Vejamos
    */

    function multiplicar($a, $b = 5) {
        return $a * $b;
    }

    echo multiplicar(10); // 50
    echo '<br>';
    echo multiplicar(10, 3); // 30

    // IMPORTANTE: os parâmetros opcionais devem sempre ser definidos
    // depois dos parâmetros não opcionais