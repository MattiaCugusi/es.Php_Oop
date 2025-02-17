<?php
    class Alunno implements JsonseììSerializable {
        protected $nome;
        protected $cognome;
        protected $eta;
        protected $voto = [];
        
        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function setCognome($cognome){
            $this->cognome = $cognome;
        }

        public function getEta(){
            return $this->eta;
        }

        public function setEta($eta){
            $this->eta = $eta;
        }

        public function setVoto(Voto $voto){
            $this->voto= $voto;
        }

        

        public function toString(){
            echo "<p>Nome: " . $this->nome . "</p>";
            echo "<p>Cognome: " . $this->cognome . "</p>";
            echo "<p>Eta: " . $this->eta . "</p>";
            echo "--------------------------------------";
        }

        public function jsonSerialize() : array{
            return{
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'eta'=> $this->eta,
                'voti' => $this->mark
            }
        }


    }

?>