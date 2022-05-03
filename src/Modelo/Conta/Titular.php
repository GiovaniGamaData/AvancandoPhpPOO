<?php

namespace Modelo\Conta;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct($cpf, $nome, $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEnderecoTitular(): Endereco
    {
        return $this->endereco;
    }
}
