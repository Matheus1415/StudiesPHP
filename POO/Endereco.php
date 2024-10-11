<?php

namespace POO\Modelo;

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(
        string $userCidade,
        string $userBairro,
        string $useRua,
        string $useNumero
    )
    {
     $this->cidade = $userCidade;
     $this->bairro = $userBairro;
     $this->rua = $useRua;
     $this->numero = $useNumero;   
    }

    //Metodos de Recuperação
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }
    
    public function recuperaNumero(): string
    {
        return $this->numero;
    }

}