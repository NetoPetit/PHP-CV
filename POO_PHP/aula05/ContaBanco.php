<?php 
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($num){
            $this->numConta = $num;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($st){
            $this->status = $st;
        }

        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta com dinheiro.</p>";
            }elseif($this->getSaldo() < 0){
                echo "<p>Conta em débito.</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de " . $this->getDono() . " fechada.</p>";
            }
        }

        public function depositar($v){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$$v realizado na conta de " . $this->getDono() . "</p>";
            }else{
                echo "<p>Não é possível realizar o depósito.</p>";
            }
        }

        public function sacar($v){
            if($this->getStatus() == true){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$$v feito na conta de " . $this->getDono() . "</p>";
                }else{
                    echo "<p>Saldo insuficiente.</p>";
                }
            }else{
                echo "<p>Impossível sacar.</p>";
            }
        }

        public function pagarMensal(){
            $v = 0;
            
            if($this->getTipo() == "CC"){
                $v = 12;
            }elseif($this->getTipo() == "CP"){
                $v = 20;
            }

            if($this->getStatus() == true){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$$v debitada da conta de " . $this->getDono() . "</p>";
                }else{
                    echo "<p>Saldo insuficiente.</p>";
                }
            }else{
                echo "Impossível pagar.";
            }
        }
    }

?>