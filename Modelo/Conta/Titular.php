<?php
namespace  Jhonattan\Banco\Modelo\Conta;
use Jhonattan\Banco\Modelo\Pessoa;
use Jhonattan\Banco\Modelo\Cpf;
use Jhonattan\Banco\Modelo\Endereco;
class Titular extends  Pessoa implements Autenticavel
{

private Endereco $endereco;

    public function __construct(string $nome,Cpf $cpfTitular,Endereco $endereco)
{
    parent::__construct($nome,$cpfTitular);
    $this->endereco = $endereco;
}




    public function getEndereco():string
    {

        return $this->endereco->getEndereco();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha==='abc';
    }
}