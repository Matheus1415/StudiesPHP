<?php

$telefone = ['(24) 22222-2222','(23) 22222-222asd2','(21) 22222-2222'];

foreach($telefone as $telefone){
    // $telefoneValido = preg_match('/\(\d{2}\)\ \d{5}\-\d{4}/',$telefone);

 $telefoneValido = preg_replace('/\(\d{2}\)\ \d{5}\-\d{4}/', 'xxxx', $telefone);
    if($telefoneValido){
        echo"Telefone válido </br>";
    }else{
        echo "Telefone inválido </br>";
    }
}