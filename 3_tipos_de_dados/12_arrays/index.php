<?php
    $a = [1, 2, 3];

    echo $a;//erro, tentando converter um array para uma string
    echo "<br>";
    print_r($a);

    //pode acessar cada um dos índices do array
    //pode acessar os elementos separados
    //array começa com índice 0

    echo "<br>";
    echo $a[0];//escolhendo um item dentro do array

    $arr = ["Higo", 1005, true];//array com tipos de dados variável
    //não esta com referência, nome de chave, que possa associar a um item

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
    