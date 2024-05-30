<?php
require_once './src/Conta.php';
require_once './src/Titular.php';

$primeiraConta = new Conta(new Titular('123456789', 'João'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
