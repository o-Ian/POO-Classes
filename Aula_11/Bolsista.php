<?php

require_once 'Aluno.php';

class Bolsista extends Aluno{

    private $bolsa;
    
    
    public function renovarBolsa(){

    }
    
    //Reposição
    public function pagarMensalidade(){
        echo $this->getNome() . " é bolsista, portanto paga mensalidade com desconto.";
    }

}