<?php

abstract class Pessoa implements ItensBloqueio {
    private $nome;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $numeroKsa;
    private $cep;
    private $email;
    private $fone;
    private $qtdFone;
    
    public function getNome() {
        return $this->nome;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getNumeroKsa() {
        return $this->numeroKsa;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setNumeroKsa($numeroKsa) {
        $this->numeroKsa = $numeroKsa;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    // ----- metodo sobrescrito da interface itens bloqueado -----
    public function foneBloqueado($numeroFone, $qtd){
        $this->fone = $numeroFone;
        $this->qtdFone = $qtd;
    }

}