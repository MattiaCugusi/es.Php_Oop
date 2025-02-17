<?php

public class Indirizzo implements JsonSerializable{
    protected $via;
    protected $numCivico;
    protected $cap;
    protected $citta;

    public function __construct($via, $numCivico, $cap, $citta){
        $this->via = $via;
        $this->numCivico = $numCivico;
        $this->cap = $cap;
        $this->citta = $citta;
    }

    public function getVia(){
        return $this->via;
    }

    public function setVia($via){
        $this->via = $via;
    }

    public function getNumCivico(){
        return $this->numCivico;
    }

    public function setNumCivico($numCivico){
        $this->cognome = $numCivico;
    }

    public function getCap(){
        return $this->cap;
    }

    public function setCitta($citta){
        $this->eta = $citta;
    }

    public function toString(){
        echo "<p>Via: " . $this->via . "</p>";
        echo "<p>Num Civico: " . $this->numCivico . "</p>";
        echo "<p>CAP: " . $this->cap . "</p>";
        echo "<p>Citta: " . $this->citta . "</p>";
        echo "--------------------------------------";
    }


    public function jsonSerialize() : array{
        return{
            'via' => $this->via,
            'numCivico' => $this->numCivico,
            'cap'=> $this->cap,
            'citta' => $this->citta
        }
    }


}

?>