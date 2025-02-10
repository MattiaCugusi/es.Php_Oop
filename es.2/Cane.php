<?php
 require_once "Animale.php";

 class Cane extends Animale{
    public function __construct(){
        parent::__construct("bau");
    }

    public function verso(){
        echo "il cane abbaia";
    }
 }

?>