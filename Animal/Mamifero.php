<?php

require_once './Animais.php';

class Mamifero extends Animais {

    private $corPelo;

    public function alimentar() {
        echo "<p>MAMANDO</p>";
    }

    public function locomover() {
        echo "<p>CORRENDO</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

}
