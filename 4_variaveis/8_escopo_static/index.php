<?php
    function teste(){
        $a = 0;

        $a++;//operador de atribuição

        echo "$a <br>";
    }

    //invoca a função 3x
    teste();
    teste();
    teste();
    
    //o valor normal não persiste quando a gente cria um função escopo local

    function testeStatic(){
        static $a = 0;

        $a++;//operador de atribuição

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
    