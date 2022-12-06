<?php
//open in paiza.io
require_once 'autoload.php';

use Jhonattan\Banco\Modelo\Conta\ContaCorrente;
use Jhonattan\Banco\Modelo\Endereco;
use Jhonattan\Banco\Modelo\Conta\Titular;
use Jhonattan\Banco\Modelo\Cpf;
use Jhonattan\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('cascavel','esmeralda','antonia rotta ribeiro','67');
$jhonattan = new Titular("jhonattan", new Cpf("136.125.210-09"),$endereco);
$conta1 = new ContaCorrente($jhonattan,1000);

$curtar = new Titular("curtar", new Cpf("136.125.350-09"),$endereco);

$conta2 = new ContaCorrente($curtar,900);

new ContaCorrente(new Titular("testee",new Cpf("124.124.245-20"),$endereco),1000);

echo $endereco->rua;