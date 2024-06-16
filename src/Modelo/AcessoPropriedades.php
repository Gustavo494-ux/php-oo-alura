<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nome):string
    {
        $metodo = 'recupera' . ucfirst($nome);
        return $this->$metodo();
    }
}