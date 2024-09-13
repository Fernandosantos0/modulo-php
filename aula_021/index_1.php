<?php

    // STRINGS
    // -----------------------------------------------------------------

    // Uma string é um conjunto de caracteres;
    // Já vimos muitas strings ao longo do módulo.
    // Vamos relembrar alguns dos conceitos e acrescentar novas informações

    $nome = "Fernando";
    $sobrenome = 'Santos';

    // As duas variáveis são do tipo string
    // Diferença: nas aspas duplas, podemos adicionar variáveis no interior

    $apresentacao = "O meu nome é $nome e o sobrenome é $sobrenome";

    // Podemos melhorar a leitura com a seguinte equivalência
    $apresentacao = "O meu nome é ${nome} e o sobrenome é ${sobrenome}";
    // ou
    $apresentacao = "O meu nome é {$nome} e o sobrenome é {$sobrenome}";

    // -----------------------------------------------------------------
    // CONCATENAÇÃO DE STRINGS

    $nome_completo = $nome . ' ' . $sobrenome;

    // -----------------------------------------------------------------
    // COMO OBTER A PRIMEIRA LETRA DO NOME?
    
    echo $nome[0]; // vamos falar de arrays em breve

    // para obter a 3ª letra
    echo $nome[2];

    // F e r n a n d o
    // 0 1 2 3 4 5 6 7

    // para acesso a letras da direita para a esquerda
    // podemos usar números negativos
    echo $nome[-1];

    // Podemos usar este método para modificar letras
    $sobrenome[2] = 'N';
    echo $sobrenome;