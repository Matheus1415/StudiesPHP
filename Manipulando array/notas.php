    <?php

    $notas = [
            "Matheus" => 9,
            "Vitor" => 4,
            "Guilerme" => 1,
            "Juan" => null
    ];

    //sada para ordenar um array em ordem decrescente (do maior para o menor) porem muda o indice
    // rsort($notas);
    // krsort($notas);
    // var_dump($notas);

    // if(is_array($notas)){
    //     echo 'Sm é um array';
    // }
    // verifica se numeros é sequencial
    // array_is_list($notas);
    echo 'Alguem tirou 4?'.'</br>';
    var_dump(in_array(4, $notas, true));
    echo '</br>';
    echo array_search(2, $notas);