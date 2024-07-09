<?php
    //is_int(5), número que queremos checar, se é um inteiro ou não

    //bloco if
    if(is_int(5)){//função is_int(), vai me dá um verdadeiro (true) ou falso (false), no caso é true
        echo "É um inteiro 1 <br>";
    }

    if(is_int("Não é um inteiro")){//false
        echo "É um inteiro 2 <br>";
    }

    //encaplusa em uma variável
    $a = 10;

    if(is_int($a)){//true
        echo "É um inteiro 3 <br>";
    }