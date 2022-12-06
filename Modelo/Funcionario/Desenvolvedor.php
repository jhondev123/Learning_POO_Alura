<?php

namespace Jhonattan\Banco\Modelo\Funcionario;

use Jhonattan\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 500.0;
    }

    public function sobeDeNivel()
    {
        $this->receAumento($this->getSalario()*0.75);
    }
}