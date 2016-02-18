<?php


class PessoaFisica extends Cliente{

    public function __construct($id = null,$nome = null,$cpf = null ,$idade = null,$estrela = null,$sexo = null,$endereco = null,$pessoa = null, $EnderecoCobranca = null, $GrauImportancia = null)
    {
        parent::__construct($id,$nome,$cpf ,$idade,$estrela,$sexo,$endereco,$pessoa, $EnderecoCobranca, $GrauImportancia);
        $this->cpf = $cpf;
    }
}