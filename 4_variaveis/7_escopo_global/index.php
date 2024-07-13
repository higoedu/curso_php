<?php
    //escopo global afeta blocos de código que não sejam funções
    $teste = "asd";

    echo "$teste global 1 <br>";

    //teoricamente, tenho um bloco de código
    //só que ele ainda esta no escopo global
    if(true){//entrando de qualquer jeito, ou 5 > 2, esta colocando só booleano
        $teste = "dsa";//vai ter alteração da variável escopo global
        //não é uma criação no escopo do if

        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    //tenho essa alteração da variável em qualquer bloco de código
    //que não esteja dentro de uma função
    //if também esta compartilhando o escopo global do nosso código

    function funcao(){
        echo "$teste local <br>";//erro, variável $teste não esta definida dentro da função
    }

    funcao();//não tenho acesso a variável global no local, não por default

    function funcao(){
        $teste = "xsxs";//variável declarada

        echo "$teste local <br>";
    }

    funcao();

    function testandoGlobal(){
        global $teste = "xsxs";//utlizando a instrução global
        //para chamar a variável de escopo global
        //no escopo local e testado global

        //mudo o valor da variável no escopo global
        //se altero ela no escopo local
        //acessndo pela instrução global
        //por default não funciona
        $teste = 2;

        echo "$teste global função <br>";
    }

    testandoGlobal();

    echo "$teste global 3 <br>";
