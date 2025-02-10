<?php

    class Veicolo {
        private $marca;
        private $anno;


        public function __construct($marca, $anno){
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

        public function toString(){
            echo "<p>Marca: " . $this->marca . "</p>";
            echo "<p>Anno: " . $this->anno . "</p>";

        }










    }

?>