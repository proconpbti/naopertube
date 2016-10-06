<?php
  echo '<script>alert("Inserir Usuario!")</script>';

  require ('../model/mysql.php');
/*
class CadastroDbUser {
    private $pessoa;

    public function __construct(){
        echo 'Meu URL'.BASE_URL;//localhost e diretorio atual
    }
    public function cadastrarPessoaFisica($pessoaFisica){
          $this->pessoa = $pessoaFisica;
          // ----- cadastro documento pessoa fisica -----
          try {
              $sql_dado_pf = "INSERT INTO pessoaFisica (cpf, nome, emailCadastrado, rg, orgaoExpedidor, uf) VALUES('".pessoa->getCpf()."','".pessoa->getNome()."','".pessoa->getEmail()."','".pessoa->getRg()."','".pessoa->getOrgExp()."')";
              $result = mysqli_query($sql_dado_pf);

              if($result){
                  echo '<script>alert("Dados Pessoa fisica cadastrada com sucesso!")</script>';
              }
          } catch (Exception $e) {
                    echo '<script>alert("Erro ao inserir dados da Pessoa fisica no banco!")</script>';
          }
          // ----- cadastro de endereço da pessoa fisica ----
          try {
              $sql_end_pf = "INSERT INTO pessoaFisica (logradouro, numero, cep, bairro, cidade, uf) VALUES('".pessoa->getRua()."','".pessoa->getNumeroKsa()."','".pessoa->getCep()."','".pessoa->getBairro()."','".pessoa->getUf()."')";
              $result = mysqli_query($sql_end_pf);

              if($result){
                  echo '<script>alert("Endereço Pessoa fisica cadastrada com sucesso!")</script>';
              }
          } catch (Exception $e) {
                    echo '<script>alert("Erro ao inserir endereço da Pessoa fisica no banco!")</script>';
          }

    }
}*/
