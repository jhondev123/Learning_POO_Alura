<?php

namespace Jhonattan\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
protected function percentualTarifa(): float
{
    return 0.05;
}



public function transferir(float $valoraTransferir, Conta $contadestino): void
    {
        if ($valoraTransferir > $this->saldo) {
            echo "saldo indisponivel";
            return;
        }
        $this->sacar($valoraTransferir);
        $contadestino->deposita($valoraTransferir);

    }
}