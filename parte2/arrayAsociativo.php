<?php
//Array asociativo chave => valor da chave
// $conta1 = [
//     "nome" => "Matheus",
//     "saldo" => "1000"
// ];

// $conta2 = [
//     "nome" => "Maria",
//     "saldo" => "5000"
// ];

// $conta3 = [
//     "nome" => "Vitor",
//     "saldo" => "9000"
// ];

//Asociando ao arrayy o cpf
$contaCorrente = [
    12345678910 => [
        "nome" => "Vitor",
        "saldo" => "9000"
    ], 
    12345678911 => [
        "nome" => "Matheus",
        "saldo" => "1000"
    ], 
    12345678912 => [
        "nome" => "Wesley",
        "saldo" => "9000"
    ]
];

//aidicionando algo ao array asociativo

$contaCorrente[12345678913] = [
    "nome" => "Claudia",
    "saldo" => "9000"
];
    

//Asociando o valor conta ao indice $cpf
foreach($contaCorrente as $cpf => $conta){
    echo $cpf." ".$conta['nome'] . "<br>"; 
}
?>
