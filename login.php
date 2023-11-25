<?php

class Login {
    private string $email;
    private string $senha;
    private string $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $n): void
    {
        $this->nome = $n;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function setEmail(string $e): void {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $s): void
    {
        $this->senha = $s;
    }

    public function logar()
    {
        if($this->email == "eduardo@gmail.com" && $this->senha == 1234){
            echo 'logado com sucesso';
        }
        else {
            echo 'dados invalidos';
        }
    }

    public function pegatudo(){
        return $this->getEmail();
    }
}

$email = 'eduardo@gmail.com';
$senha = '1234';
$nome = 'eduardo';

$usuario = new Login($email, $senha, $nome);
$usuario->getNome();
$usuario->logar();