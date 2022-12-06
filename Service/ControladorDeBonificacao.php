<?php

namespace Jhonattan\Banco\Service;

use Jhonattan\Banco\Funcionario\Funcionario;

class ControladorDeBonificacao
{
    private float $totalBonificacoes=0;

    public function adicionaBonificacaoDe(Funcionario $funcionario):void
    {
        $this->totalBonificacoes+=$funcionario->calculaBonificacao();
    }

    public function recuperaTotal():float
    {
        return $this->totalBonificacoes;
    }
}