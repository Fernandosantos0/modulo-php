<?php

echo '<pre>';

/*
    1. Define 3 variáveis todas com 15 unidades como valor 
    2. Multiplica a primeira por 5, a segunda por 10 e a terceira por 15
    3. Finalmente, adiciona as três variáveis

    Resultado: 450
*/

$a = $b = $c = 15;

$a *= 5;
$b *= 10;
$c *= 15;

$soma = $a + $b + $c;

echo  "Resultado: $soma";