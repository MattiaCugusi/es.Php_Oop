<?php
     public 

    public function jsonSerialize() : array{
        return{
            'materia' => $this->nome,
            'valore' => $this->cognome,
            'giudizio'=> $this->eta,
        }
    }
?>