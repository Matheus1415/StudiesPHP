<?php

$nome = 'Matheus Pereira';

$ehMinhaFamilia = str_contains($nome, 'Pereira');

// if($ehMinhaFamilia)
//     echo "$ehMinhaFamilia é da minha familia.";
// else
// echo "$ehMinhaFamilia não é da familia";

// $url = 'https://alura.com.br';
// if(str_starts_with($url,'https')){
//     echo "$url é segura";
// }else{
//     echo "$url não é segura";
// }

$url = 'https://alura.com.br';
if(str_ends_with($url,'br')){
    echo "$url é segura";
}else{
    echo "$url não é segura";
}