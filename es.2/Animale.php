<?php

class Animale{
    private $verso;

    public function __construct($verso){
        $this->verso = $verso;
    }

    public function verso(){
        return $this->verso;
    }
}  

?>
