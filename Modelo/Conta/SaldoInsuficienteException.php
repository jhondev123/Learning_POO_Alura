<?php

namespace Jhonattan\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
public function __construct(float $valordoSaque,float $saldoatual)
{
    $message = "vc tentou sacar {$valordoSaque} mais o saldo atual {$saldoatual} é insuficiente";
    parent::__construct($message);
}
}