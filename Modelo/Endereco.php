<?php
namespace Jhonattan\Banco\Modelo;
/**
 * class Endereco
 * @package Jhonattan\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 *
 * @property-read string $numero
 * @property  string $rua
 */
final class Endereco
{
    use AcessoAPropriedades;
private  string $cidade;
private string $bairro;
private string $rua;
private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

 public function __toString(): string // transforma objeto em string
 {
    return "{$this->rua}, {$this->numero},{$this->bairro},{$this->cidade}";
 }


    /**
     * @param string $rua
     */
    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function getEndereco():string
    {
        return "{$this->cidade}, {$this->bairro},{$this->rua},{$this->numero}";
}
    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }


}