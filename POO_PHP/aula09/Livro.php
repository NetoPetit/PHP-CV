<?php 
    require_once "Pessoa.php";
    require_once "Publicacao.php";

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        }

        public function folhear($p){
            if($p > $this->getTotPaginas()){
                $this->setPagAtual($this->pagAtual = 0);
            }else{
                $this->setPagAtual($this->pagAtual = $p);
            }
        }

        public function abrir(){
            $this->setAberto(true);
        }

        public function fechar(){
            $this->setAberto(false);
        }

        public function avancarPag(){
            $this->setPagAtual($this->getPagAtual() + 1);
        }

        public function voltarPag(){
            $this->setPagAtual($this->getPagAtual() - 1);
        }

        public function detalhes(){
            /*echo "<p>".."</p>";
            echo "<p>".."</p>";
            echo "<p>".."</p>";
            echo "<p>".."</p>";
            echo "<p>".."</p>";
            echo "<p>".."</p>";*/
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($t){
            $this->titulo = $t;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($a){
            $this->autor = $a;
        }
        
        public function getTotPaginas(){
            return $this->totPaginas;
        }

        public function setTotPaginas($tp){
            $this->totPaginas = $tp;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function setPagAtual($pa){
            $this->pagAtual = $pa;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function setAberto($a){
            $this->aberto = $a;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        public function setLeitor($l){
            $this->leitor = $l;
        }
    }

?>