<?php

class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Métodos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } else if ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "Conta com Dinheiro";
        } else if ($this->getSaldo() < 0) {
            echo "Conta em Debito";
        } else {
            $this->setStatus(FALSE);
            echo "<p>Conta ".$this->getDono()." Fechada com sucesso </p>";
        }
    }

    public function deposito($v) {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de $v Realizado na conta " . $this->getDono()." </p>";
        } else {
            echo "Conta fechada, Não consigo depositar ! ";
        }
    }

    public function sacar($v) {
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v Realizado com sucesso na conta ".$this->getDono()."</p>";
            }else{
                echo "Conta está sem saldo, para Saque";
            }
        }else{
            echo "Não posso sacar de uma conta Fechada";
        }
    }

    public function pagarMensal() {
        if($this->getTipo() == "CC"){
            $v = 12;
        } else if($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }else {
            echo "Problemas com a conta, Não posso cobrar ! ";
        }
    }
    
    //Metodos especiais 
    function __construct() { 
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<br>Conta criada com sucesso !! <br>";
    }

    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
