<?php
//As chaves do array associativo so pode ser inteiro ou string
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];


foreach($array as $item){
    echo $item;
}