<?php

require_once '../ProjetoPessoa/Pessoa.php';
class Aluno extends Pessoa{
    private $curso;
    private $matricula;
    
    public function cancelarMatri(){
        echo "<p>Matricula sera cancelada</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>ALUNO PAGA MENSALIDADE</P>";
    }
            
    function getCurso() {
        return $this->curso;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }


}
