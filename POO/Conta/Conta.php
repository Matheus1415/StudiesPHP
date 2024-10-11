<?php

namespace POO\Modelo\Conta;

abstract class Conta
{
    private readonly string $cpf ;
    private readonly string $titular;
    protected float $saldo = 0;

    public function __construct(string $cpfTitular, string $Titular)
    {
        $this->cpf = $cpfTitular;
        $this->validaNomeTitular($Titular);
        $this->titular = $Titular;
        $this->saldo = 0;
    }


    public function saca(float $valorHaSacar): void
    {
        $taxaSaque = $valorHaSacar * $this->percentualTarifa();        
        $valorASacarComTaxa = $valorHaSacar - $taxaSaque; 
    
        if ($valorHaSacar > $this->saldo) {
            echo "Saldo insuficiente!";
            return;
        }
    
        $this->saldo -= $valorASacarComTaxa; 
        echo "A taxa de saque foi de $taxaSaque </br>";
        echo "Saque de $valorASacarComTaxa realizado com sucesso! </br>";
    }
    

    public function deposita(float $valorHaDepositar): void
    {
        if ($valorHaDepositar < 0) {
            echo 'Valor precisa ser maior que zero';
            return;
        }

        $this->saldo += $valorHaDepositar;
        echo "Depósito de $valorHaDepositar foi realizado com sucesso! </br>";
    }


    //Get do Banco
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getTitular() : string
    {
        return $this->titular;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    //Validar Regras de Negocio
    private function validaNomeTitular($validaNome)
    {
        $nomeValido = preg_match('/[A-Z]{1}.*[a-zA-Z]/', $validaNome);
        if (!$nomeValido) {
            echo "O nome do titular deve conter pelo menos 5 caracteres.";
        }
    }    

    private function validaCpf($validaCpf)
    {
        $cpfValido = preg_match('/\d{3}\.\d{3}\.\d{3}\-\d{2}/',$validaCpf);
        if (!$cpfValido) {
            echo "Seu cpf é invalido";
        }
    }

    abstract protected function percentualTarifa(): float;

}
