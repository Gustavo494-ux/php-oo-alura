<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifaDeContas(): float
    {
        return 0.03;
    }
}