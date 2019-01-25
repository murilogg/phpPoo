<?php

require_once './Animais.php';
class Peixe extends Animais{
    private $corEscama;


    public function alimentar() {
        echo "<p>COME SUBSTANCIAS</p>";
    }

    public function emitirSom() {
        echo "<p>NÃO FAZ SOM</p>";
    }

    public function locomover() {
        echo "<p>NADANDO</p>";
    }
    
    public function soltarBolha(){
        echo "<p>SOLTOU UMA BOLHA</p>";
    }
            
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
