<?php
namespace Jhonattan\Banco\Modelo\Conta;
use http\Exception\InvalidArgumentException;
use Jhonattan\Banco\Modelo\Pessoa;
abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContasCriadas=0;
    // a variavel estatica dentro de uma classe se torna um atributo especifico da classe, que não se altera
    //dentro de uma instancia da classe

    public function __construct(Titular $titular,float $saldo = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;

        self::$numeroDeContasCriadas++;

    }

    public function sacar(float $valor): void
    {
        $tarifasaque = $valor * $this->percentualTarifa();
        $valor += $tarifasaque;
        if ($valor > $this->saldo){
            throw new SaldoInsuficienteException($valor,$this->saldo);
        }
        $this->saldo = $valor;


    }

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            throw new \InvalidArgumentException("valor incorreto");
        }
        $this->saldo += $valor;
    }

    private function deposita(float $valor): void
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }


    public function __toString(): string
    {
        $dados = <<<dadosConta
Nome:  {$this->titular->getNome()}
Cpf:  {$this->titular->getCpf()}
saldo: {$this->saldo}
dadosConta;
        return $dados;
    }


    abstract protected  function percentualTarifa():float;


    public static function recuraNumConta(): int
    {
        return self::$numeroDeContasCriadas;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$numeroDeContasCriadas--;

    }

    public function getCpf():string
    {
        return $this->titular->getCpf();
}
    public function getNome():string
    {
        return $this->titular->getNome();
    }

    public function getEndereco():string
    {
        return $this->titular->getEndereco();
    }
}




