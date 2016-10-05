<?php
include('../config.php');


      $erro_campo = false;
      // ----- validar campos cadastrar -----
      if($_REQUEST["action"] == "save") {

        // ----- validar campos dados pessoais -----
        // ----- valida nome -----
        if (!empty($_POST['name'])) {
            $_name = $_POST['name'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Nome!")</script>';
        }
        // ----- valida email -----
        if (!empty($_POST['email'])) {
            $_email = $_POST['email'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Email!")</script>';
        }
        // ----- valida cpf -----
        if (!empty($_POST['cpf'])) {
            $_cpf = $_POST['cpf'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo CPF!")</script>';
        }
        // ----- valida rg -----
        if (!empty($_POST['rg'])) {
            $_rg = $_POST['rg'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo RG!")</script>';
        }
        // ----- valida orgao expeditor -----
        if (!empty($_POST['org'])) {
            $_org = $_POST['org'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Orgão Expeditor!")</script>';
        }
        // ----- valida uf -----
        if (!empty($_POST['uf'])) {
            $_uf = $_POST['uf'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo UF!")</script>';
        }
        // ----- validar campos dados endreço -----
        // ----- valida rua -----
        if (!empty($_POST['rua'])) {
            $_rua = $_POST['rua'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Rua!")</script>';
        }
        // ----- valida numero casa -----
        if (!empty($_POST['num_ksa'])) {
            $_num_ksa = $_POST['num_ksa'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Numero da casa!")</script>';
        }
        // ----- valida cep -----
        if (!empty($_POST['cep'])) {
            $_cep = $_POST['cep'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo CEP!")</script>';
        }
        // ----- valida bairro -----
        if (!empty($_POST['bairro'])) {
            $_bairro = $_POST['bairro'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Bairro!")</script>';
        }
        // ----- valida cidade -----
        if (!empty($_POST['cidade'])) {
            $_cidade = $_POST['cidade'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Cidade!")</script>';
      }
      }
      if (!$erro_campo){
        include('include/cadastro.class.php');

        $cadastro = new Cadastro($_name, $_email);

        $_cad = $cadastro->setPessoaFisica()."<br>";
        var_dump($_cad);

      }
