<?php

class Pessoa {

    public $nome;
    private $altura;
    private $peso;
    private $sexo;
    private $cargo;
    private $qi;

    public function Profisao() {
        if ($this->qi > 100)
            $this->cargo = "PROGRAMADOR";
        else
            $this->cargo = "ANALISTA";
    }

    public function __construct($nome, $altura, $peso, $sexo, $qi) {
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->sexo = $sexo;
        $this->qi = $qi;
        $this->Profisao();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getQi() {
        return $this->qi;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->altura = $peso;
    }

    public function setSexo($Sexo) {
        $this->altura = $Sexo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setQi($qi) {
        $this->qi = $qi;
    }

}
