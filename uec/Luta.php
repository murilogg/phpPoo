<?php

require_once './Lutador.php';

class Luta {

    // atributos
    private $desafiante;
    private $desafiado;
    private $raunds;
    private $aprovada;

    //metodos simples
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = FALSE;
            $this->desafiado = NULL;
            $this->desafiante = NULL;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0://Empate
                    echo "<p>EMPATE</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();            
                    break;
                case 1://Desafiado vence 
                    echo "<p>".$this->desafiado->getNome()." Venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();                    
                    break;
                case 2://Desafiante vence
                    echo "<p>".$this->desafiante->getNome()." Venceu</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                
            }
        }else{
            echo "<p> LUTA NÃO PODE ACONTECER </p>";
        }
    }

    // metodos especiais
    function getDesafiante() {
        return $this->desafiante;
    }

    function getDesafiado() {
        return $this->desafiado;
    }

    function getRaunds() {
        return $this->raunds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setRaunds($raunds) {
        $this->raunds = $raunds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
