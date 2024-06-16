<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\AcessoPropriedades;

class Desenvolvedor extends Funcionario
{
    use AcessoPropriedades;
    public function sobeDeNivel(): void
    {
        $this->recebeAumento($this->recuperaSalario()*0.75);
    }

   public function calculaBonificacao(): float
   {
       return 500.0;
   }

}