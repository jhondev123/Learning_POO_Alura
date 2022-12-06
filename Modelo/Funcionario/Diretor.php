<?php

namespace Jhonattan\Banco\Modelo\Funcionario;

use Jhonattan\Banco\Modelo\Funcionario\Funcionario;
use Jhonattan\Banco\Modelo\Conta\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{

    public function calculaBonificacao(): float
    {
        return $this->getSalario()*2;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '1234';
    }
}