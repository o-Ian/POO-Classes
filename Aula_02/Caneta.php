<?php

Class Caneta{
    var $modelo; 
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada){
            echo "<p> ERRO! Não posso rabiscar com a caneta tampada.";
        }else{
            echo "<p> Estou rabiscando...";
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}