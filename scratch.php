<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$desenvolvedor = new Desenvolvedor(
    'Vinicius',
    new CPF('123.456.789-10'),
    2000
);

$desenvolvedor->nome;
