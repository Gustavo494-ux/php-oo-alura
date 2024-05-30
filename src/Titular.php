<?php

use CPF;
use Pessoa;
use Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->recuperaNome();
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
