<?php

require_once './Humano.php';

class Gafanhoto extends Humano {

    private $login;
    private $totAssistido;

    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistiMaisUm() {
        $this->totAssistido ++;
    }

    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }


}
