<?php
namespace POO\Modelo\Conta;
use POO\Modelo\Conta\Conta;


class ContaCorrente extends Conta
{ 
    public function transfere(float $valorHaTransferir, Conta $contaDestino): void
    {
        if ($valorHaTransferir > $this->saldo) {
            echo 'Você não tem saldo suficiente para transferir';
            return;
        }

        $this->saca($valorHaTransferir);
        $contaDestino->deposita($valorHaTransferir);
        echo "Transferência de $valorHaTransferir realizada com sucesso !</br>";
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
    
}