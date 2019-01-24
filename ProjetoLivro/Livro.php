<?php

require_once './Pessoa.php';
require_once './Publicacao.php';

class Livro implements Publicacao {

    // ATRIBUTOS
    private $titulo;
    private $autor;
    private $totalPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // METODOS SIMPLES
    public function detalhes() {
        echo "<hr>Livro ".$this->titulo. " Escrito por " .$this->autor;
        echo "<br> Páginas: " .$this->totalPag." atual Página ".$this->pagAtual;
        echo "<br> Sendo lido por ".$this->leitor->getNome();
    }

    // METODOS ESPECIAIS
    function __construct($titulo, $autor, $totalPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPag = $totalPag;
        $this->pagAtual =0;
        $this->aberto = FALSE;
        $this->leitor = $leitor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotalPag() {
        return $this->totalPag;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotalPag($totalPag) {
        $this->totalPag = $totalPag;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        if ($this->pagAtual < $this->totalPag) {
            $this->pagAtual ++;
        } else {
            echo "<p><br>VOCÊ CHEGOU NO FINAL DO LIVRO</p>";
        }
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totalPag) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        if ($this->pagAtual <= 0) {
            echo "<p><br>VOCÊ ESTÁ COMEÇO DO LIVRO</p>";
        } else {
            $this->pagAtual --;
        }
    }

}
