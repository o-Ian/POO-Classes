<?php

class Caneta{

    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    

    public function setCor($cor){
    $this->cor = $cor;
    return $this;
    }

    public function getModelo(){
    return $this->modelo;
    }

    public function setModelo($modelo){
    $this->modelo = $modelo;
    return $this;
    }

    public function getPonta(){
    return $this->ponta;
    }

    public function setPonta($ponta){
    $this->ponta = $ponta;
    return $this;
    }

    public function getTampada(){
    return $this->tampada;
    }

    public function setTampada($tampada){
    $this->tampada = $tampada;
    return $this;
    }

}

