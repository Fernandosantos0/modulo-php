<?php

    // Podemos criar pastas de forma recursiva (adicionar pasta dentro de pasta).
    // Como não vamos usar o segundo argumento, usamos named arguments
    // para definir o valor do terceiro paramâtro
    mkdir(__DIR__ . '/aaa/bbb', recursive: true);