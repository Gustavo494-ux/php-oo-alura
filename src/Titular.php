<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct($cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $this->validaNomeTitular($nome);
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular): string
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
        return $nomeTitular;
    }
}
