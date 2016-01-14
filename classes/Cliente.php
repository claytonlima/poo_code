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

$cliente = array(
    0 => new Cliente('Clayton Lima','111111111111','30','M','Rua perdida SP'),
    1 => new Cliente('Carol Lima','22222222222','45','F','Rua achei SP'),
    2 => new Cliente('Geo Lima','33333333','55','F','Rua perdida SP'),
    3 => new Cliente('Bruno Lima','44444444','18','M','Rua perdida SP'),
    4 => new Cliente('Lucas Lima','5555555555','14','M','Rua perdida SP'),
    5 => new Cliente('Luan Lima','6666666','30','M','Rua perdida SP'),
    6 => new Cliente('Fernando Lima','9999999','25','M','Rua perdida SP'),
    7 => new Cliente('Rodrigo Lima','4101010101','20','M','Rua perdida SP'),
    8 => new Cliente('Paula Lima','121212121212','28','M','Rua perdida SP'),
    9 => new Cliente('Eduardo Lima','131313131331','55','M','Rua perdida SP')
);


