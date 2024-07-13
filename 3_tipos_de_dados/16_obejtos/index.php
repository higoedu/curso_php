<?php
    /*
    criar objeto, precisa de um molde
    molde é a classe
    */
    class Pessoa {
        //métodos, ações do objeto
        function falar(){
            echo "Olá pessoal!";
        }
    }

    //cria novo objeto a partir do molde
    $higo = new Pessoa();

    //adiciona uma propriedade
    $higo -> nome = "Higo";

    echo $higo -> nome;//é uma característica, que é o nome do objeto
    echo "<br>";

    //incova um método, que é uma função desse obejto
    $higo -> falar();//coloca a seta quando se referir a um objeto
    //para acessar uma propriedade, quanto uma função ou método


