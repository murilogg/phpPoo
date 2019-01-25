<?php

require_once '../ProjetoPessoa/Aluno.php';

class Bolsista extends Aluno {

    private $bolsa;

    public function pagarMensalidade() {
        echo "<p>BOLSISTA PAGA BOLSA DO CURSO " . $this->getNome() . "</p>";
    }

    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

}
