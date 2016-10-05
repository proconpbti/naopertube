<?php
include('pesssoa/pessoaFisica.class.php');

class Cadastro {

      public function pessoaFisica(){
                  $pessoaFisica = new PessoaFisica($_rg, $_cpf, $_org, $_uf);

                  $pessoaFisica->setNome($_nome);
                  $pessoaFisica->setEmail($_email);
                  $pessoaFisica->setCpf($_cpf);
                  $pessoaFisica->setRg($_rg);
                  $pessoaFisica->setOrgExp($_org);
                  $pessoaFisica->setUf($_uf);
                  $pessoaFisica->setRua($_rua);
                  $pessoaFisica->setNumeroKsa($_num_ksa);
                  $pessoaFisica->setCpf($_cpf);
                  $pessoaFisica->setBairro($_bairro);
                  $pessoaFisica->setCidade($_cidade);

                  return " - entrou!";

      }
      /*public function pessoaJuridica(){
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
      }*/
}
