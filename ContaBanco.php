<?php

class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function __construct($numConta, $tipo, $dono) {
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = 0;
        $this->status = FALSE;
    }

    public function abrirConta($t) {
        $this->setSaldo($this->tipo = $t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } else if ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->setSaldo > 0) {
            echo "Conta com Dinheiro";
        } else if ($this->setSaldo < 0) {
            echo "Conta em Debito";
        } else {
            $this->setSaldo(FALSE);
        }
    }

    public function deposito() {
        
    }

    public function sacar() {
        
    }

    public function pagarMensal() {
        
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
