<?php


class Cliente {
    public $nome;
    public $cpf;
    public $idade;
    public $sexo;
    public $endereco;

    public function __construct($nome = null,$cpf = null ,$idade = null,$sexo = null,$endereco = null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
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

}










