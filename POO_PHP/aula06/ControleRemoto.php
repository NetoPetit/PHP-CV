<?php 
    include("Controlador.php");

    class ControleRemoto implements Controlador{

        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function getVolume(){
            return $this->volume;
        }
        
        private function setVolume($v){
            $this->volume = $v;
        }

        private function getLigado(){
            return $this->ligado;
        }
        
        private function setLigado($l){
            $this->ligado = $l;
        }

        private function getTocando(){
            return $this->tocando;
        }
        
        private function setTocando($t){
            $this->tocando = $t;
        }

        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "======Menu======";
            echo "<br>Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br>Volume: " . $this->getVolume();
            for($i = 0; $i <= $this->getVolume(); $i += 10){
                echo " | ";
            }
            echo "<br>";
        }
        public function fecharMenu(){
            echo "Fechando Menu";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo "<p>Erro. Não pode aumentar o volume</p>";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5 );
            }else{
                echo "<p>Erro. Não pode diminuir o volume</p>";
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }

?>