<?php
namespace POO\Modelo\Conta;
use POO\Modelo\Conta\Conta;


class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}