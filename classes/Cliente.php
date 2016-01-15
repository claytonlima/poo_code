<?php

class Cliente {
    public $nome;
    public $cpf;
    public $idade;
    public $sexo;
    public $endereco;

    public function __construct($nome,$cpf,$idade,$sexo,$endereco){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
    }
}










