<?php

use Jhonattan\Banco\Modelo\Conta\ContaCorrente;
use Jhonattan\Banco\Modelo\Conta\Titular;
use Jhonattan\Banco\Modelo\Cpf;
use Jhonattan\Banco\Modelo\Endereco;

require_once "autoload.php";



try{

    $conta = new ContaCorrente(
        new Titular(
            "JHONATTAN",
            new Cpf("123.125.321-12"),
            new Endereco("cascavel","coqueiral","antonio jose elias","260")
        ),
        1200);

    $conta->depositar(-10);
    echo $conta;
}catch (InvalidArgumentException | DomainException $exception){
    echo "erro:  {$exception->getMessage()}".PHP_EOL;
}




