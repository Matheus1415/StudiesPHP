<?php

namespace POO\Modelo;

class Pessoa
{
    private string $nome;
    private string $cpf;

    public function __construct(string $userNome, string $userCpf)
    {
        $this->cpf = $userCpf;
        $this->validaCpf($userCpf);
        $this->nome = $userNome;
        $this->validaNome($userNome);
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    //Validar Regras de Negocio
    public function validaNome($validaNome)
    {
        $nomeValido = preg_match('/[A-Z]{1}.*[a-zA-Z]/', $validaNome);
        if (!$nomeValido) {
            echo "O nome do titular deve conter pelo menos 5 caracteres.";
        }
    }    

    public function validaCpf($validaCpf)
    {
        $cpfValido = preg_match('/\d{3}\.\d{3}\.\d{3}\-\d{2}/',$validaCpf);
        if (!$cpfValido) {
            echo "Seu cpf é invalido";
        }
    }

}