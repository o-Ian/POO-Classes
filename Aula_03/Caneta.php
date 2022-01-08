<?php

Class Caneta{
    public $modelo; 
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if($this->tampada){
            echo "<p> ERRO! Não posso rabiscar com a caneta tampada.";
        }else{
            echo "<p> Estou rabiscando...";
        }
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }
}