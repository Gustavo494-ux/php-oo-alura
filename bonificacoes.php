<?php
require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Gustavo',
    new CPF('123.456.789-10'),
    1000.0
);

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.789-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.789-11'),
    5000,
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    3500
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal().PHP_EOL;