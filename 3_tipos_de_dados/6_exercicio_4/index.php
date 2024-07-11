<?php
    /*
    imprima três floats
    utilize a função is_float em um deles;
    */
    echo 4.15;
    echo "<br>";
    echo 12.12;
    echo "<br>";

    $c = -78.1;

    echo $c;
    echo "<br>";

    if(is_float($c)){
        echo "Sim, podemos ter floats negativos!";
    }

    if(is_int($c)){
        echo "É um inteiro!";//não é um inteiro, pois tem ponto flutuante
    }