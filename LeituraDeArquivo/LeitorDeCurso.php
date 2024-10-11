<?php

// Verifica se a leitura ja cegou no final
// while(!feof($arquivo)){
//     Pega a linha do arquivo
//     $curso = fgets($arquivo);

//     echo $curso."</br>";
// }

//Ler Arquivos
$arquivo = fopen('texto.txt','r');

$tamanhArquivo = filesize('texto.txt');

$texto = fread($arquivo,$tamanhArquivo);

echo $texto;

//Fecha o arquivo 
fclose($arquivo);