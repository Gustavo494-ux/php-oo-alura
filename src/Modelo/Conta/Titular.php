<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

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
