<?php

class Lutador {

    // ATRIBUTOS
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura, $peso, $categoria;
    private $vitorias, $derrotas, $empates;

    // METODOS
    function apresentar() {
        echo "<br>|--------------------------APRESENTAÇÃO ----------------------------|<br>";
        echo "CHEGOU A HORA !!!, O lutador " . $this->getNome();
        echo " Veio diretamente do Pais " . $this->getNacionalidade();
        echo " Tem " . $this->getIdade() . " anos e Pesa " . $this->getPeso() . "Kg com ".$this->getAltura()." de altura, ";
        echo "<br>Ele tem " . $this->getVitorias() . " Vitórias " . $this->getDerrotas();
        echo " Derrotas e " . $this->getEmpates() . " Empates ";
    }

    function status() {
        echo "<br><br>-----------------STATUS---------------------";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes, Perdeu " . $this->getDerrotas();
        echo " Vezes e empatou " . $this->getEmpates() . " vezes! </p>";
    }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // METODOS ESPECIAS
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido !!";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Medio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido !!";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}
