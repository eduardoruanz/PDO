<?php

class Login {
    private string $email;
    private string $senha;
    private string $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(): string
    {
        return $this->nome;
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

$usuario = new Login('eduardo@gmail.com', '1234', 'eduardo');

$usuario->logar();