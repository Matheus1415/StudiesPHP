<?php

$alunos2022 = [
    "Matheus",
    "Vitor",
    "Guilerme",
    "Juan"
];

$novosAluno = [
    "Pedro",
    "Helle",
    "Leticia",
    "Hiago"
];

//Juanta um array a outro modificando o indice
$alunos2023 = array_merge($alunos2022, $novosAluno);
//Desempacotador de array
$alunos2023 = [...$alunos2022, 'Madara uchira   ',...$novosAluno];
//Spred
     
$valores = [1, 2, 3];
echo max(...$valores); // Aqui, o operador de espalhamento é usado para passar os valores individuais de $valores para a função max()

var_dump($alunos2023);
