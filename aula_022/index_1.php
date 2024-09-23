<?php

    // ARRAYS
    // É uma variável que funciona como uma coleção de dados.

    $nome1 = 'Fernando';
    $nome2 = 'Ana';
    $nome3 = 'Pedro';

    $nomes = array('Fernando', 'Ana', 'Pedro');
    // ou
    $nomes = ['Carlos', 'José', 'Vitor'];

    // como aceder a cada elemento
    echo $nomes[0]; // primeiro nome da coleção
    echo $nomes[2]; // terceiro nome da coleção

    // No caso anterior, as chaves são atribuídas automaticamente.
    // Podemos definir as nossas próprias chaves

    $nomes = [
        10 => 'Maria',
        20 => 'Eduarda',
        30 => 'Rosária'
    ];

    echo $nomes[20];

    // se tentarmos aceder a uma chave que não existe, surge um aviso!

    echo $nomes[100];

    // para evitsr o viso, podemos verificar se o item existe
    var_dump(isset($nomes[20]));