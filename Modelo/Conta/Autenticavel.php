<?php

namespace Jhonattan\Banco\Modelo\Conta;

interface Autenticavel
{
     public function podeAutenticar(string $senha): bool;

}