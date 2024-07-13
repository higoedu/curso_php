<?php
    echo NULL;

    //pode alterar o valor, ao logo do software
    //setando desse jeto, diz que vai utilizar ela
    //inicialmente não tem valor
    $nome = NULL;

    if(is_null($nome)){//verifica se o dado passado é nulo
        echo "O valor é nulo 1!";
    }

    $nome = "Higo";//nome não é mais nulo, pois passou valor de Higo
    //deixa de ser nulo e vira uma string

    if(is_null($nome)){//não acontece, pois foi atribuído um valor
        echo "O valor é nulo 2!";
    }
