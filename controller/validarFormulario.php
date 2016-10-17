<?php
include ('../config.php');

    $erro_campo = false;
    // ----- validar campos cadastrar -----
   if($_REQUEST["action"] == "save") {
        //----- validar campos dados pessoais -----
        //----- valida nome -----
        if (!empty($_POST['name'])) {
            $_name = $_POST['name'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Nome!")</script>';
            redirect_page();
        }
        // ----- valida email -----
        if (!empty($_POST['email'])) {
            $_email = $_POST['email'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Email!")</script>';
            redirect_page();
        }
        // ----- valida cpf -----
        if (!empty($_POST['cpf'])) {
            $_cpf = $_POST['cpf'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo CPF!")</script>';
            redirect_page();
        }
        // ----- valida rg -----
        if (!empty($_POST['rg'])) {
            $_rg = $_POST['rg'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo RG!")</script>';
            redirect_page();
        }
        // ----- valida orgao expeditor -----
        if (!empty($_POST['org'])) {
            $_org = $_POST['org'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Orgão Expeditor!")</script>';
            redirect_page();
        }
        // ----- valida uf -----
        if (!empty($_POST['uf'])) {
            $_uf = $_POST['uf'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo UF!")</script>';
            redirect_page();
        }
        // ----- validar campos dados endreço -----
        // ----- valida rua -----
        if (!empty($_POST['rua'])) {
            $_rua = $_POST['rua'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Rua!")</script>';
            redirect_page();
        }
        // ----- valida numero casa -----
        if (!empty($_POST['num_ksa'])) {
            $_num_ksa = $_POST['num_ksa'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Numero da casa!")</script>';
            redirect_page();
        }
        // ----- valida cep -----
        if (!empty($_POST['cep'])) {
            $_cep = $_POST['cep'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo CEP!")</script>';
            redirect_page();
        }
        // ----- valida bairro -----
        if (!empty($_POST['bairro'])) {
            $_bairro = $_POST['bairro'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Bairro!")</script>';
            redirect_page();
        }
        // ----- valida cidade -----
        if (!empty($_POST['cidade'])) {
            $_cidade = $_POST['cidade'];
        } else {
            $erro_campo = true;
            echo '<script>alert("Preencha Campo Cidade!")</script>';
            redirect_page();
      }
    }


    /*if($_REQUEST["action"] == "ave") {
        echo '<script>alert("Validação!")</script>';
        $validar = new ValidarData();

        //$validar->set('cpf', $_POST['cpf'])->is_required();
        //$validar->set('rg', $_POST['rg'])->is_required();
        //$validar->set('uf', $_POST['uf'])->is_required();
        //$validar->set('org', $_POST['org'])->is_required();

        //$validar->set('name', $_POST['name'])->is_required();
        $validar->set('email', $_POST['email'])->is_required()->is_email();
        var_dump($validar->get_errors())

        //$validar->set('rua', $_POST['rua'])->is_required();

        //$validar->set('num_ksa', $_POST['num_ksa'])->is_required();
        //$validar->set('cep', $_POST['cep'])->is_required();
        //$validar->set('bairro', $_POST['bairro'])->is_required();
        //$validar->set('cidade', $_POST['cidade'])->is_required();

    }*/
    if (!$erro_campo) {
          echo '<script>alert("sem erros!")</script>';
        include_once ('include/cadastrar/cadastro.class.php');

            $cadastro = new Cadastro($_name, $_email, $_cpf, $_rg, $_org, $_uf, $_rua, $_num_ksa, $_cep, $_bairro, $_cidade);
            $cadastro->setPessoaFisica();
            $pessoaF = $cadastro->getPessoaFisicaCd();


        include('../model/daoDb/cadastrodbuser.class.php');
           $eu = new CadastroDbUser();
           $eu->cadastrarPessoaFisica($pessoaF);

           redirect_user();
      }
