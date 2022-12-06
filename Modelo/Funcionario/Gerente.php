<?php

namespace Jhonattan\Banco\Modelo\Funcionario;

use Jhonattan\Banco\Modelo\Funcionario\Funcionario;
use Jhonattan\Banco\Modelo\Conta\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
public function calculaBonificacao(): float
{
 return $this->getSalario();
}

    public function podeAutenticar(string $senha): bool
    {
    return $senha === '123456789';
    }
}