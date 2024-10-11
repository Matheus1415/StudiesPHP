<?php

namespace POO\Modelo\Conta;
use POO\Modelo\Pessoa;

class Titular extends Pessoa
{
    private string $endereco;

    public function __construct(string $Usertitular, $Usercpf, string $useEndereco)
    {
        parent::__construct($Usertitular, $Usercpf);
        $this->endereco = $useEndereco;
    }
}
