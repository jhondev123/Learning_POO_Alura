<?php
require_once "autoload.php";

use Jhonattan\Banco\Modelo\Conta\{ContaPoupanca, SaldoInsuficienteException, Titular};
use Jhonattan\Banco\Modelo\{endereco};
use Jhonattan\Banco\Modelo\Cpf;

$cpf = new Cpf("136.125.356-12");
$endereco = new Endereco("cascavel","coqueiral","pantanal","20");
$titular = new Titular("jhonattan",$cpf,$endereco);
$conta = new ContaPoupanca($titular,1000);
try {
    $conta->sacar(1000);
}catch (SaldoInsuficienteException){
    echo "vc n tem saldo para realizar o saque".PHP_EOL;
}


echo $conta->verDados();