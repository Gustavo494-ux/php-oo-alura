<?php
require_once './src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);


$primeiraConta->definirCpfTitular('123456789');
$primeiraConta->definirNomeTitular('João');

echo $primeiraConta->recuperarCpfTitular();
echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarSaldo();