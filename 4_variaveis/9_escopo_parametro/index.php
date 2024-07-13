<?php
    //quando a função for executada
    //os valores de parâmetros serão passados
    //para as variáveis internas, nesse escopo
    function soma($a, $b){//escopo de parâmetro
        echo $a + $b;//não precisa declarar elas
        //utilizo elas que já vem de parâmetro

        echo "<br>";
    }

    soma(2, 4);
    soma(6, 8);
    soma(10, 10);
