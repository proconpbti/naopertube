<?php
include ('pessoa.class.php');

class PessoaFisica extends Pessoa {

    private $rg;
    private $cpf;
    private $orgExp;
    private $uf;

    public function __construct(){

    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getOrgExp() {
        return $this->orgExp;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setOrgExp($orgExp) {
        $this->orgExp = $orgExp;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }
}
