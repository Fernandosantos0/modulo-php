<?php

    // SESSÕES

    /*
    As sessões são um dos mecanismos que o PHP ofereve para manter informação
    entre diferentes requests
    Sempre que navegamos numa página web criada em PHP, e sempre que um novo 
    pedido é feito ao servidor (por exemplo para ver uma nova página),
    toda a informação sobre variáveis é perdida

    Existem várias formas de persistência da informação.
    Se queremos guardar informação entre request, podemos usar cookies
    que veremos mais á frente neste módulo, guardar e ler dados de uma base de dados,
    passando variáveis através de POST ou GET (veremos em breve como funciona).

    Com as sessões, podemos guardar dados temporariamente no servidor e, no request seguinte
    esses dados vão continuar disponíveis

    Vejamos como funciona com um exemplo simples.
    */