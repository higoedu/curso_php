<?php
    $a = "teste";//string
    $b = 12.8;//float

    if(is_float($a)){
        echo "É float 1! <br>";
    }

    if(is_float($b)){
        echo "É float 2! <br>";
    }

    //-------------------------------
    //número hard code, coloca na mão
    if(is_float(6565.63)){
        echo "É float 3! <br>";
    }

    if(is_float("teste")){
        echo "É float 4! <br>";
    }
    //-------------------------------

    //quando a gente quer garantir que esse tipo de dado seja exercido no programa
    