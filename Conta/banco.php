<?php

require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Helio Sugano'));

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getTitular()->getCpf()->getCpfNumero() . PHP_EOL;
echo $primeiraConta->getTitular()->getNome() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('123.456.987-10'), 'Haruo Takamori'));

echo $segundaConta->getTitular()->getCpf()->getCpfNumero() . PHP_EOL;
echo $segundaConta->getTitular()->getNome() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

$terceiraConta = new Conta(new Titular(new Cpf('123.456.854-12'), 'abcdefg'));
echo $terceiraConta->getTitular()->getCpf()->getCpfNumero() . PHP_EOL;
echo $terceiraConta->getTitular()->getNome() . PHP_EOL;
echo $terceiraConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;

?>
