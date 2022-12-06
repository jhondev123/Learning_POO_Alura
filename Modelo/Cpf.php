<?php
namespace Jhonattan\Banco\Modelo;
final class Cpf
{
private string $cpf;

    /**
     * @param string $cpf
     */
    public function __construct(string $cpf)
    {
     $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }


    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
       $this->validaCpf($cpf);
    }

    private function validaCpf($cpf):void
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($cpf === false) {

            throw new \InvalidArgumentException("cpf invalido");
        }

    }

}