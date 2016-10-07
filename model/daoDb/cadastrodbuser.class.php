<?php
include_once ('include/pessoa/pessoaFisica.class.php');

class CadastroDbUser {
    //private $pessoa;
    public function __construct(){

    }

    public function cadastrarPessoaFisica($pessoaF){
            require_once('../model/mysql.php');

            $sql_dado_pf = "INSERT INTO pessoaFisica (cpf, nome, emailCadastro, rg, orgaoExpedidor, uf) VALUES ('".$pessoaF->getCpf()."','".$pessoaF->getNome()."','".$pessoaF->getEmail()."','".$pessoaF->getRg()."','".$pessoaF->getOrgExp()."','".$pessoaF->getUf()."')";
            $result = mysqli_query($dbc, $sql_dado_pf);

            if($result){
                echo '<script>alert("Dados Pessoa fisica cadastrada com sucesso!")</script>';
            } else {
                printf("Error: %s\n", mysqli_error($dbc));
            }
            mysqli_close($dbc);

         /*
          // ----- cadastro de endereço da pessoa fisica ----
          try {
              /*$sql_end_pf = "INSERT INTO pessoaFisica (logradouro, numero, cep, bairro, cidade, uf) VALUES('".pessoa->getRua()."','".pessoa->getNumeroKsa()."','".pessoa->getCep()."','".pessoa->getBairro()."','".pessoa->getUf()."')";
              $result = mysqli_query($sql_end_pf);

              if($result){
                  echo '<script>alert("Endereço Pessoa fisica cadastrada com sucesso!")</script>';
              }
          } catch (Exception $e) {
                    echo '<script>alert("Erro ao inserir endereço da Pessoa fisica no banco!")</script>';
          }*/

    }
}
