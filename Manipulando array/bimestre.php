<?php

$bimestre1 = [
    "Matheus" => 9,
    "Vitor" => 4,
    "Guilerme" => 1,
    "Juan" => 6
];

$bimestre2 = [
    "Matheus" => 9,
    "Vitor" => 8,
];

$alunosFaltantes = array_diff_key($bimestre1, $bimestre2);
//pega chave do array
var_dump(array_keys($alunosFaltantes));
//Pega o valor do array
var_dump(array_values($alunosFaltantes));
//inverte o indice e o valor o valor passa a ser o indice e o indice o valor
var_dump(array_flip($alunosFaltantes));