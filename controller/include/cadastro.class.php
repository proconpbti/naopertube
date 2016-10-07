<?php
 include ('pessoa/pessoaFisica.class.php');

class Cadastro {
      private $nome;
      private $emial;
      private $cpf;
      private $rg;
      private $org;
      private $uf;
      private $rua;
      private $numKsa;
      private $cep;
      private $bairro;
      private $cidade;

      public function __construct($_name, $_email, $_cpf, $_rg, $_org, $_uf, $_rua, $_num_ksa, $_cep, $_bairro, $_cidade){
            $this->nome = $_name;
            $this->email = $_email;
            $this->cpf = $_cpf;
            $this->rg = $_rg;
            $this->org = $_org;
            $this->uf = $_uf;
            $this->rua = $_rua;
            $this->numKsa = $_num_ksa;
            $this->cep = $_cep;
            $this->bairro = $_bairro;
            $this->cidade = $_cidade;
      }
}
