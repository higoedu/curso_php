<?php
    /*
    crie um array associativo com características de uma pessoa;
    desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;
    */

    $pessoa = [
        'nome' => 'Higo',
        'idade' => 42,
        'profissao' => 'Analista de Sistemas',
        'graduacao' => 'Engenheiro de Computação'
    ];

    $maiorIdade = 18;

    //desafio
    if($pessoa['idade'] >= $maiorIdade){
        echo "A pessoa é maior de idade!";
    }