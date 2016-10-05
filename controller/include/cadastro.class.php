<?php
 include ('pessoa/pessoaFisica.class.php');

class Cadastro {
      private $nome;
      private $emial;
      public function __construct($_name, $_email){
            $this->nome = $_name;
            $this->email = $_email;
      }
      public function setPessoaFisica(){
            try {
                  $pessoaFisica = new PessoaFisica();

                  $pessoaFisica->setNome($this->nome);
                  $pessoaFisica->setEmail($this->email);
                  //$pessoaFisica->setCpf($_cpf);
                  //$pessoaFisica->setRg($_rg);
                  //$pessoaFisica->setOrgExp($_org);
                  //$pessoaFisica->setUf($_uf);
                  //$pessoaFisica->setRua($_rua);
                  //$pessoaFisica->setNumeroKsa($_num_ksa);
                  //$pessoaFisica->setCpf($_cpf);
                  //$pessoaFisica->setBairro($_bairro);
                  //$pessoaFisica->setCidade($_cidade);
                  return $pessoaFisica->getNome()." - ".$pessoaFisica->getEmail();
            } catch (Exception $e) {

            }
      }
      public function pessoaJuridica(){
            try {
                  $pessoaJuridica = new PessoaJuridica($_cnpj, $_razaoSocial, $_inscEstd, $_tmkting);

                  $pessoaJuridica->setNome($_nome);
                  $pessoaJuridica->setEmail($_email);
                  $pessoaJuridica->setRua($_rua);
                  $pessoaJuridica->setNumeroKsa($_num_ksa);
                  $pessoaJuridica->setBairro($_bairro);
                  $pessoaJuridica->setCidade($_cidade);
                  $pessoaJuridica->setCnpj($_cnpj);
                  $pessoaJuridica->setRazaoSocial($_razaoSocial);
                  $pessoaJuridica->setInscEstd($_inscEstd);
                  $pessoaJuridica->setTmkting($_tmkting);
            } catch (Exception $e) {
                  echo '<script>alert("Ocorreu um erro ao cadastro de pessoa Jurídica!")</script>';
            }
      }
      public function setAddress(){
            try {
                  
            } catch (Exception $e) {

            }
      }
}
