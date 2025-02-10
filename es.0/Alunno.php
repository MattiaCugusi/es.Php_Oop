<?php
    class Alunno {
        private $nome;
        private $cognome;
        private $eta;


        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(){
            $this->nome = $nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function setCognome(){
            $this->cognome = $cognome;
        }

        public function getEta(){
            return $this->eta;
        }

        public function setEta(){
            $this->eta = $eta;
        }

        public function toString(){
            echo "<p>Nome: " . $this->nome . "</p>";
            echo "<p>Cognome: " . $this->cognome . "</p>";
            echo "<p>Eta: " . $this->eta . "</p>";
            echo "--------------------------------------";
        }


    }

?>