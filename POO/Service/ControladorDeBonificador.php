<?php
namespace POO\Modelo\Service;

use POO\Modelo\Funcionario;
use POO\Modelo\Funcionario\Funcionario as trabalhador;

class ControladorDeBonificador
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacao(trabalhador $funcionario)
    {
        $this->totalBonificacoes +=$funcionario->calcularBonificacao();
    }

    public function recuperaBonificacao(trabalhador $funcionario)
    {
        $this->totalBonificacoes +=$funcionario->calcularBonificacao();
    }

}