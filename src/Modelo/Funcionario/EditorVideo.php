<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario
{

    function calculaBonificacao(): float
    {
        return 600;
    }
}