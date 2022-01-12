<?php

require_once 'Publicacao.php';

require_once 'Pessoa.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function detalhes(){
        echo "Livro: " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo ". Páginas: " . $this->getTotPaginas();
        echo " Atual: " . $this->getPagAtual();
        echo ". Sendo lido por " . $this->leitor->getNome();
    }

    public function __construct($titulo, $autor, $totPaginas, $leitor)  
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($p>$this->getTotPaginas()){
            $this->setPagAtual(0);
        }
        else{
            $this->setPagAtual($p);
        }
    }
    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual()+1);
    }
    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual()-1);
    }
}