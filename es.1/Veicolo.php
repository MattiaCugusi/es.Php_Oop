<?php

    class Veicolo {
        private $marca;
        private $anno;


        public function __construct($marca, $cognome, $eta){
            $this->marca = $marca;
            $this->anno = $anno;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca(){
            $this->marca = $marca;
        }

        public function getAnno(){
            return $this->anno;
        }

        public function setAnno(){
            $this->anno = $anno;
        }









    }

?>