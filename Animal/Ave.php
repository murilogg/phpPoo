<?php

require_once './Animais.php';

class Ave extends Animais {

    private $corPena;

    public function alimentar() {
        echo "<p>COMER FRUTAS</p>";
    }

    public function emitirSom() {
        echo "<p>SOM DE AVE</p>";
    }

    public function locomover() {
        echo "<p>VOANDO</p>";
    }

    public function fazerNinho() {
        echo "<p>FEZ UM NINHO</p>";
    }

    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

}
