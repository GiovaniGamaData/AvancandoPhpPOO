<?php

namespace Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct($nome, $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    protected function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}