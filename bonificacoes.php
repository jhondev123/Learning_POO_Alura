<?php
require_once "autoload.php";

use Jhonattan\Banco\Modelo\{Cpf};
use Jhonattan\Banco\Modelo\Funcionario\{Funcionario,Diretor,Gerente};
use Jhonattan\Banco\Service\ControladorDeBonificacao;

$umfuncionario = new Gerente("jhonattan",
    new Cpf('136.125.999-09'),
    2100
);
$doisfuncionario = new Diretor("curtarelli",
    new Cpf('136.135.999-09'),
    1150
);
$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umfuncionario);
$controlador->adicionaBonificacaoDe($doisfuncionario);
echo $controlador->recuperaTotal();