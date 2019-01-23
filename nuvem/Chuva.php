<?php

class Chuva {

    private $posibilidade;
    private $cor; 
    private $raio; 

    //metodos simples
    public function cor() {

        if ($this->posibilidade <= 30) {
            $this->cor = "O CEU ESTÁ CLARO";
            $this->raio = 30;
            echo "$this->cor";
        } elseif ($this->posibilidade <= 60) {
            $this->cor = "O CEU ESTA CINZA";
            $this->raio = rand(70, 90);
            echo "$this->cor";
        } elseif ($this->posibilidade <= 90) {
            $this->cor = "O CEU ESTÁ ESCURO";
            $this->raio = 90;
            echo "$this->cor";
        }
    }

    public function chuva() {
        if ($this->posibilidade > 75) {
            echo "<br>pode chover hoje " . $this->posibilidade."% ";
        } else {
            echo "<br>Sem possibilidade de chuva hoje";
        }
    }

    function __construct($posibilidade) {

        $this->posibilidade = $posibilidade;
    }
    function getPosibilidade() {
        return $this->posibilidade;
    }

    function getCor() {
        return $this->cor;
    }

    function getRaio() {
        return $this->raio;
    }

    function setPosibilidade($posibilidade) {
        $this->posibilidade = $posibilidade;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setRaio($raio) {
        $this->raio = $raio;
    }



}
