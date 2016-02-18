<?php


class PessoaJuridica extends Cliente{

    public function __construct($id = null,$nome = null,$cnpj = null ,$idade = null,$estrela = null,$sexo = null,$endereco = null,$pessoa = null, $EnderecoCobranca = null, $GrauImportancia = null)
    {
        parent::__construct($id,$nome,$cnpj ,$idade,$estrela,$sexo,$endereco,$pessoa, $EnderecoCobranca, $GrauImportancia);
        $this->cnpj = $cnpj;
    }
}