<?php
require_once 'src/Conta.php';
require_once 'src/Cliente.php';
require_once 'src/Cpf.php';

$elizabete = new Cliente(new Cpf('123.456.789-10'), 'Elizabete Fabri');
$primeiraConta = new Conta($elizabete);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeCliente() . PHP_EOL;
echo $primeiraConta->recuperaCpfCliente() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Cliente(new Cpf('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Cliente(new Cpf('123.098.123-09'), 'Abcdefg'));
echo Conta::recuperaNumeroDeContas();