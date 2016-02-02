<?php

class Cliente {
    public $nome;
    public $cpf;
    public $idade;
    public $sexo;
    public $endereco;
    public $pessoa;
    public $estrela;

    public function __construct($nome,$cpf,$idade,$estrela,$sexo,$endereco,$pessoa){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->estrela = $estrela;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
        $this->pessoa = $pessoa;

    }

    /**
     * @return mixed
     */
    public function getEstrela()
    {
        return $this->estrela;
    }

    /**
     * @param mixed $estrela
     */
    public function setEstrela($estrela)
    {
        $this->estrela = $estrela;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param mixed $pessoa
     */
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
        return $this;
    }

}










