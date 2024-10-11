<?php

include("include.php");


function exibiMessagem($msg) 
{
    echo $msg . "<br>"; 
}

function letrasTitular($titular)
{
    return mb_strtoupper($titular);
}

function sacar(&$saldo, float $saque)
{
    if($saque > $saldo['saldo']){
        echo "Ops não pode sacar mais que o saldo <br>";
    }else{
        $saldo['saldo'] -= $saque;
    }
}

function depositar(&$saldo, float $deposito)
{
    if($deposito < 0){
        echo "Ops você não pode depositar um valor negativo";
    }else{
        $saldo['saldo'] += $deposito;
    }
}

function userAdicionar(&$contaCorrente, $cpfUser, string $nomeUser, float $saldoUser)
{
    $contaCorrente[$cpfUser] = [
        "nome" => $nomeUser,
        "saldo" => $saldoUser
    ];
}


// Associando ao array o cpf
$contaCorrente = [
    12345678910 => [
        "nome" => "Guilerme",
        "saldo" => 4300
    ], 
    12345678911 => [
        "nome" => "Matheus",
        "saldo" => 1000
    ], 
    12345678912 => [
        "nome" => "Vitor",
        "saldo" => 9000
    ]
];

$contaCorrente[12345678911]['nome'] = letrasTitular($contaCorrente[12345678911]['nome']);

// Realizando o depósito
depositar($contaCorrente[12345678912], 270);
//Remove variaveis da memoria
unset($contaCorrente['12345678911']);

userAdicionar($contaCorrente,129182134,"Madara foda", 145);


// Iterando sobre as contas e exibindo os resultados
foreach($contaCorrente as $cpf => $conta){
    ['nome'  => $titular, 'saldo' => $saldo] = $conta;
    exibiMessagem(
        "$titular $saldo"
    );
}
?>
