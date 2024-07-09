<?php
    echo                                             "testando espaço em branco <br>";
    echo "testando espaço <br>"                      ;
    echo
    "quebra de linha <br>"
    ;
    echo "quebra de linha <br>"
    ;

    // -------------------------------------

    ec
    ho "quebra de linha <br>"
    ;

    //ou

    ec ho "quebra de linha <br>"
    ;

    /*
    por separar o echo:
    ec
    ho
    gera erro de sintaxe, não esperava a ho
    */

    // -------------------------------------

    echo "quebra de 
    linha <br>"
    ;

    /*
    estes exemplos não são uma boa prática
    deixa o código difícil de dá manutenção e desorganizado
    */
