<?php

namespace Jhonattan\Banco\Modelo;

trait AcessoAPropriedades
{
    public function __get(string $name) // é chamado sempre que for chamado um atributo sem acesso
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }
    public function __set(string $name, $value): void
    {
        $metodo = 'set' . ucfirst($name);
        $this->$metodo($value);
    }
}