<?php

class Pessoa {
    // esses sao os atributos
    public $nome;
    public $idade;

    public function Falar(string $falar): string
    {
        // retorne isto nome 
        return $falar . $this->nome;
    }
}

$dudu = new Pessoa();
$dudu->nome = 'eduardo';
$dudu->idade = '16';

echo $dudu->Falar('ola meu nome é: ');
