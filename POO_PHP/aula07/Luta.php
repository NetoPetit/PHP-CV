<?php 
    require_once "Lutador.php";

    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function getDesafiado(){
            return $this->desafiado;
        }

        public function setDesafiado($d){
            $this->desafiado = $d;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }
        
        public function setDesafiante($d){
            $this->desafiante = $d;
        }

        public function getRounds(){
            return $this->rounds;
        }
        
        public function setRounds($r){
            $this->rounds = $r;
        }

        public function getAprovada(){
            return $this->aprovada;
        }
        
        public function setAprovada($a){
            $this->aprovada = $a;
        }

        public function marcarLuta($l1, $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar(){
            if($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = random_int(0, 2);

                switch($vencedor){
                    case 0:
                        echo "<p>Empatou</p>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1:
                        echo "<p>".$this->getDesafiado()." ganhou</p>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2:
                        echo "<p>".$this->getDesafiante()." ganhou</p>";
                        $this->getDesafiado()->perderLuta();
                        $this->getDesafiante()->ganharLuta();
                        break;
                }
            }
        }
    }

?>