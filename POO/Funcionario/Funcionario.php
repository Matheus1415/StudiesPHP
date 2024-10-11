<?php

namespace POO\Modelo\Funcionario;

use POO\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{

    private float $salario;

    public function __construct(string $userNome, string $userCpf, float $useSalario)
    {
        parent::__construct($userNome, $userCpf);
        $this->salario = $useSalario;
    }

    
    public function recuperaSalario() :float
    {
        return $this->salario;
    }

    abstract public function calcularBonificacao() :float;

    public function AulemtarSalario(float $salarioAlmentado){
        return $this->salario = $salarioAlmentado;
    }

}