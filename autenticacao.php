<?php

use Jhonattan\Banco\Modelo\Funcionario\Diretor;
use Jhonattan\Banco\Modelo\Funcionario\Gerente;
use Jhonattan\Banco\Modelo\Conta\Titular;
use Jhonattan\Banco\Modelo\Cpf;
use Jhonattan\Banco\Modelo\Endereco;
use Jhonattan\Banco\Service\Autenticador;

require_once 'autoload.php';
$autenticador = new Autenticador();
$titular = new Titular(
    "jhonattan",
    new Cpf("135.215.321-23"),
    new Endereco("cascavel","coqueiral","casa do caralho","21")
);
$diretor = new Gerente("jhonattan",new Cpf("136.125.999-12"),1200);

$autenticador->tentaLogin($titular,"abc");
$autenticador->tentaLogin($diretor,"123456789");
