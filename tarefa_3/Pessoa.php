<?php

class Pessoa
{
    private $nome;
    private $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        $saudacao = 'Olá, meu nome é ' .$this->nome. ' e tenho ' .$this->idade. ' anos.';

        return $saudacao;
    }
}

?>