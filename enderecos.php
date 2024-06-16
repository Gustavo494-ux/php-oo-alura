<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'minha rua',
    '76'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua ai',
    '50',
);

echo $umEndereco->bairro.PHP_EOL;

echo $umEndereco.PHP_EOL;
echo $outroEndereco.PHP_EOL;