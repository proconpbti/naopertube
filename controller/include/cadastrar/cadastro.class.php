<?php
 include ('../pessoa/pessoaFisica.class.php');

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
      private $pessoaFisica;

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
            $this->pessoaFisica = new PessoaFisica();
      }
      public function setPessoaFisica(){
            try {
                  $this->pessoaFisica->setCpf($this->cpf);
                  $this->pessoaFisica->setRg($this->rg);
                  $this->pessoaFisica->setOrgExp($this->org);
                  $this->pessoaFisica->setUf($this->uf);

                  $this->setAddress($this->pessoaFisica);
            } catch (Exception $e) {
                  echo '<script>alert("Ocorreu um erro ao cadastro de pessoa Física!")</script>';
            }
      }
      public function setPessoaJuridica(){
            try {
                  $pessoaJuridica = new PessoaJuridica();
                  $pessoaJuridica->setCnpj($_cnpj);
                  $pessoaJuridica->setRazaoSocial($_razaoSocial);
                  $pessoaJuridica->setInscEstd($_inscEstd);
                  $pessoaJuridica->setTmkting($_tmkting);

                  $this->setAddress($pessoaJuridica);
            } catch (Exception $e) {
                  echo '<script>alert("Ocorreu um erro ao cadastro de pessoa Jurídica!")</script>';
            }
      }
      public function setAddress($pessoa){
            try {
                  $pessoa->setNome($this->nome);
                  $pessoa->setEmail($this->email);
                  $pessoa->setRua($this->rua);
                  $pessoa->setBairro($this->bairro);
                  $pessoa->setCep($this->cep);
                  $pessoa->setNumeroKsa($this->numKsa);
                  $pessoa->setCidade($this->cidade);
            } catch (Exception $e) {
                  echo '<script>alert("Ocorreu um erro ao cadastro de endereço!")</script>';
            }
      }
      public function getPessoaFisicaCd(){
            return $this->pessoaFisica;
      }
}
