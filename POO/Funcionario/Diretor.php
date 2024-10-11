<?php
namespace POO\Modelo\Funcionario;

use POO\Modelo\Altenticar;
use POO\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Altenticar
{
    public function calcularBonificacao() :float
    {   
        return  $this->recuperaSalario()*2;
    }

    public function AltenticaSenha(string $senha):bool
    {   
        return  $senha === '123';
    }

}