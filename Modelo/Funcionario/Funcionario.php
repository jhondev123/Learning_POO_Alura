<?php
namespace Jhonattan\Banco\Modelo\Funcionario;
use Jhonattan\Banco\Modelo\Cpf;
use Jhonattan\Banco\Modelo\Pessoa;

 abstract class Funcionario extends Pessoa
{
private float $salario;


    public function __construct(string $nome, Cpf $cpf,$salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;

    }

     public function receAumento(float $valorAumento):void
     {
         if ($valorAumento < 0){
             echo "valor deve ser positivo";
             return;
         }
         $this->salario+=$valorAumento;

    }



    public function setNome($nome):void
    {
    $this->validaNome($nome);
        $this->nome = $nome;
}

    public function getSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float;


}