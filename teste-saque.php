<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use \Alura\Banco\Modelo\Conta\ContaPoupanca;
use \Alura\Banco\Modelo\Conta\ContaCorrente;

require_once "autoload.php";

$conta = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"),
        "Gustavo",
        new Endereco(
            'Petrópolis',
            "Bairro Teste",
            "lá",
            '37'
        )
    ),
);



$conta->deposita(500) . PHP_EOL;
$conta->saca(100) . PHP_EOL;
$conta->transfere();

echo $conta->recuperaSaldo();
