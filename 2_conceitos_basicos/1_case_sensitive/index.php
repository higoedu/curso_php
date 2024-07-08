<?php
    //instrução da linguagem não é case sensitive
    echo "teste <br>";
    eCho "testando 2 <br>";
    ECHO "testando 3";

    //variável é case sensitive
    //atribuiu um valor
    $nome = "Higo";

    echo $nome;
    echo "<br>";
    //vai gerar um erro, pois a variável nome nao esta definida
    //esse e o erro que o php esta nos passando
    echo $NOME;
