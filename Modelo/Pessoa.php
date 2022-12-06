<?php
namespace Jhonattan\Banco\Modelo;
abstract class Pessoa
{
protected string $nome;
protected Cpf $cpf;

    /**
     * @param string $nome
     * @param Cpf $cpf
     */
    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    protected function validaNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            throw new \DomainException("o nome precisa ter mais de 5 letras");
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

}