<?php 
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($n){
            $this->nacionalidade = $n;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($i){
            $this->idade = $i;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($a){
            $this->altura = $a;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($p){
            $this->peso = $p;
            $this->setCategoria();
        }

        public function getCategoria(){
            return $this->categoria;
        }

        private function setCategoria(){
            if($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
            }elseif($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
            }elseif($this->getPeso() <= 83.9){
                $this->categoria = "Médio";
            }elseif($this->getPeso() <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($v){
            $this->vitorias = $v;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function setDerrotas($d){
            $this->derrotas = $d;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($e){
            $this->empates = $e;
        }

        public function apresentar(){
            echo "<p>------------------</p>";
            echo "<p>Lutador " . $this->getNome() . "</p>";
            echo "<p>Veio de " . $this->getNacionalidade() . "</p>";
            echo "<p>Tem " . $this->getIdade() . " de idade e pesa " .$this->getPeso() . "</p>";
            echo "<p>Tem " . $this->getVitorias() . " de vitórias</p>";
            echo "<p>" . $this->getDerrotas() . " derrotas e " .$this->getEmpates() . " empates</p>";
        }

        public function status(){
            echo "<p>--------------------------</p>";
            echo "Nome " . $this->getNome();
            echo " peso " . $this->getPeso();
            echo " categoria " . $this->getCategoria();
            echo " " . $this->getVitorias() . " vitórias";
            echo " " . $this->getDerrotas() . " derrotas";
            echo " " . $this->getEmpates() . " empates.";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }

?>