<?php

class Pessoa {
    // esses sao os atributos
    public string $nome;
    public int $idade;
    public bool $status;

    public function Falar(){
        echo 'falou';
    }
}

$dudu = new Pessoa();
$dudu->nome = 'eduardo';
$dudu->idade = '16';
$dudu->status = false;
var_dump($dudu);
