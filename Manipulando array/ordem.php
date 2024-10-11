<?php

$notas = [
    [
        "aluno" => 'Matheus',
        "nota" => 10
    ],
    [
        "aluno" => 'Guilherme',
        "nota" => 6
    ],
    [
        "aluno" => 'Vitor ',
        "nota" => 7
    ]
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];   
}

echo 'Notas Desordenadas: ';
echo var_dump($notas) . "</br>"; // Imprime o array não ordenado

//ordena o array ultilizando a regra da função passada
usort($notas, 'ordenaNotas'); // Ordena o array

echo 'Notas Ordenadas: ';
echo var_dump($notas); // Imprime o array ordenado
?>
