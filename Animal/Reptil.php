<?php

require_once './Animais.php';

class Reptil extends Animais {

    private $corEscama;

    public function alimentar() {
        echo "<p>COMER FOLHAS</p>";
    }

    public function emitirSom() {
        echo "<P>Som de Reptil</p>";
    }

    public function locomover() {
        echo "<p>Rasteijando</p>";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
