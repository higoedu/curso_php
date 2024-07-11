<?php
    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';
    echo "Ele disse 'Olá!' <br>";
    echo "Ele disse "Olá!" <br>";//erro sintaxe
    echo 'Ele disse "Olá!" <br>';

    $idade = 15;

    echo "Ele tem $idade anos <br>";//aspas duplas interpretam variáveis
    echo 'Ele tem $idade anos <br>';//aspas simples não interpretam variávies, consideram com textos
