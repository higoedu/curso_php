<?php
    $x = 10;

    echo "$x global <br>";

    //a função por si só, não é executada
    //fica esperando ser chamada
    function teste(){
        $x = 5;

        echo "$x local <br>";
    }

    teste();

    echo "$x global <br>";

    teste();

    function testando(){
        $x = 12;

        echo "$x local 2 <br>";
    }

    $x = 99;

    testando();
    teste();

    echo "$x global <br>";

    //o escopo global não alterado pelo local
    //e nem o local é alterado pelo global, ou outro local
    //cada função vai ter seu próprio escopo
    //podemos manusear com o memsmo nome que
    //não vai ter problema nenhum em afetar o escopo
    //de outras funções, ou o escopo global do nosso código