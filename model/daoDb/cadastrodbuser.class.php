<?php
include_once ('include/pessoa/pessoaFisica.class.php');
require_once('../model/mysql.php');

class CadastroDbUser {
    //private $pessoa;
    public function __construct(){

    }

    public function cadastrarPessoaFisica($pessoaF){
            //require_once('../model/mysql.php');

            $sql_dado_pf = "INSERT INTO pessoaFisica (cpf, nome, emailCadastro, rg, orgaoExpedidor, uf) VALUES ('".$pessoaF->getCpf()."','".$pessoaF->getNome()."','".$pessoaF->getEmail()."','".$pessoaF->getRg()."','".$pessoaF->getOrgExp()."','".$pessoaF->getUf()."')";
            $result = mysqli_query($dbc, $sql_dado_pf);

            if($result){
                echo '<script>alert("Dados Pessoa fisica cadastrada com sucesso!")</script>';
            } else {
                printf("Error: %s\n", mysqli_error($dbc));
            }
            mysqli_close($dbc);
    }

    public function cadastrarPessoaFisicaEnder($pessoaF){
            //require_once('../model/mysql.php');

            $sql_dado_pf = "INSERT INTO endereco (logradouro, numero, cep, bairro, cidade, uf, identificador) VALUES ('".$pessoaF->getRua()."','".$pessoaF->getNumeroKsa()."','".$pessoaF->getEmail()."','".$pessoaF->getRg()."','".$pessoaF->getOrgExp()."','".$pessoaF->getCpf()."')";
            $result = mysqli_query($dbc, $sql_dado_pf);

            if($result){
                echo '<script>alert("Dados Pessoa fisica cadastrada com sucesso!")</script>';
            } else {
                printf("Error: %s\n", mysqli_error($dbc));
            }
            mysqli_close($dbc);
    }
}
