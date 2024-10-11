<?php
namespace POO\Modelo\Funcionario;

use POO\Modelo\Altenticar;
use POO\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Altenticar
{
    public function calcularBonificacao() :float
    {   
        return  $this->recuperaSalario();
    }

    public function AltenticaSenha(string $senha):bool
    {   
        return  $senha === '456';
    }
}