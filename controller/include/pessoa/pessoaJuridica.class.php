<?php
include ('pessoa.class.php');

class PessoaJuridica extends Pessoa {
    private $cnpj;
    private $razaoSocial;
    private $inscEstd;
    private $tmkting;

    public function __construct($cnpj, $razaoSocial, $inscEstd, $tmkting) {
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->inscEstd = $inscEstd;
        $this->tmkting = $tmkting;
    }
    public function getCnpj() {
        return $this->cnpj;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getInscEstd() {
        return $this->inscEstd;
    }

    public function getTmkting() {
        return $this->tmkting;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setInscEstd($inscEstd) {
        $this->inscEstd = $inscEstd;
    }

    public function setTmkting($tmkting) {
        $this->tmkting = $tmkting;
    }
}
