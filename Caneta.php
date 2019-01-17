<?php


class Caneta {
    public $cor;
    public $modelo;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada==true) {
            echo "ERRO, A caneta está tampada !!";
        }else{
            echo "Eu estou rabiscando";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = FALSE;
    }
}
