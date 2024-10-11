<?php

use POO\Modelo\Conta\Conta;

function criarConta(string $cpf, string $titular, float $saldo):array
{
    return [
        $cpf => [
            'titular' => $titular,
            'saldo' => $saldo
        ]
    ];
}

$conta = criarConta('204233843','madara',987);

$conta['204233843']['saldo'] -= 1200;
// var_dump($conta);

require('Conta.php');

$contaNova = new Conta();
$contaNova->titular = 'Matheus'; 
$contaNova->depositar(500);
echo "</br>";

$contaNova2 = new Conta();
    

var_dump($contaNova);