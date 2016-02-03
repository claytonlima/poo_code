<?php
require_once __DIR__ . "../interfaces/EnderecoCobranca.php";
require_once __DIR__ . "../interfaces/GrauImportancia.php";

class Cliente implements EnderecoCobranca,GrauImportancia {
    public $nome;
    public $cpf;
    public $idade;
    public $sexo;
    public $endereco;
    public $pessoa;
    public $estrela;
    public $EnderecoCobranca;
    public $GrauImportancia;

    public function __construct($nome = null,$cpf = null ,$idade = null,$estrela = null,$sexo = null,$endereco = null,$pessoa = null, $EnderecoCobranca = null, $GrauImportancia = null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->estrela = $estrela;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
        $this->pessoa = $pessoa;
        $this->pessoa = $EnderecoCobranca;
        $this->pessoa = $GrauImportancia;

    }

    public function getEstrela()
    {
        return $this->estrela;
    }

    public function setEstrela($estrela)
    {
        $this->estrela = $estrela;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }

    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->EnderecoCobranca;
    }

    public function setEnderecoCobranca($EnderecoCobranca)
    {
        $this->EnderecoCobranca = $EnderecoCobranca;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->GrauImportancia;
    }

    public function setGrauImportancia($GrauImportancia)
    {
        $this->GrauImportancia = $GrauImportancia;
        return $this;
    }
}










