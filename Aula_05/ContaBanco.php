<?php

class ContaBanco{
    
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($tipo){
        $this->setStatus(false);
        $this->setSaldo(0);
        $this->setNumConta(rand(1,999999));
        $this->setTipo($tipo);
        if($tipo == 'CC'){
            $this->setSaldo($this->getSaldo()+50);
        }
        else if($tipo == 'CP'){
            $this->setSaldo($this->getSaldo()+150);
        }
    }

    public function abrirConta(){
        $this->setStatus(true);
    }

    public function fecharConta(){
        if($this->getSaldo() != 0 ){
            echo "<p>Não é possível fechar a conta com saldo na conta.</p>";
        }else{
            $this->setStatus(false);
            echo "<p>A conta foi fechada!</p>";
        }
    }

    public function depositar($montante){
        if($this->getStatus() == false){
            echo "<p>Não é possível depositar com a conta fechada.</p>";
        }else{
            $this->setSaldo($this->getSaldo() + $montante);
            $dono = $this->getDono();
            print_r("<p>Depósito de $montante reais feita na conta de $dono.</p>");
        }
    }

    public function sacar($montante){
        if($this->getStatus() && $this->getSaldo()>= $montante){
            $this->setSaldo($this->getSaldo()-$montante);
            $dono = $this->getDono();
            print_r("<p>Saque de $montante reais feita na conta de $dono.</p>");
        }else{
            echo "<p>Você não pode sacar mais do que tem no saldo.</p>";
        }
    }   

    public function pagarMensal(){
        if($this->getTipo() == 'CC'){
            $this->setSaldo($this->getSaldo() - 12);
            echo "Mensalidade de 12 reais para ". $this->getDono() . ".";
        }
        else if($this->getTipo() == 'CP'){
            $this->setSaldo($this->getSaldo() - 20);
            echo "Mensalidade de 20 reais para ". $this->getDono() . ".";
        }
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

}