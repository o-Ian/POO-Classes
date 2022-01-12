 <?php

require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function marcarLuta($l1, $l2){
        if($l2->getCategoria() == $l1->getCategoria() && $l2 != $l1){
            $this->setAprovada(true);
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
            echo "Luta marcada!";
            }
            
        
        else{
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
            echo "Eles não podem lutar.";
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);

            switch($vencedor){
                case 0: 
                    echo "A luta entre " . $this->desafiante->getNome() . " e " . $this->desafiado->getNome() . " empatou!".
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo $this->desafiado->getNome() . " ganhou a luta!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo $this->desafiante->getNome() . " ganhou a luta!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;    
            }

        }
        else{
            echo "Luta não foi aprovada.";
        }
    }


    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}