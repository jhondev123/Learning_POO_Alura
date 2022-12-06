<?php

namespace Jhonattan\Banco\Service;

use Jhonattan\Banco\Funcionario\Diretor;
use Jhonattan\Banco\Modelo\Conta\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
    if($autenticavel->podeAutenticar($senha)){
        echo " ok usuario logado";
    }else{
        echo "ops senha errada";
    }
    }
}