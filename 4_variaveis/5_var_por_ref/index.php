<?php
    $x = 10;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;//mudou a referenciada

    echo "Atribuição após ref 1";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;//muda a variável de referência

    echo "Atribuição após ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Higo";
    $nome2 =& $nome;

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "Eduardo";

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    /*
    não importa, se muda a referência ou a referenciada
    as duas vão mudar ao mesmo tempo
    e vão ter os mesmos valores
    */