<?php
    header("Content-Type: application/json");
    
    //require "Alunno.php";
    //require "Voto.php";
    //require "Indirizzo.php";

    $subDir = ["models". "includes"];

    $autoload = function ($classname){
        foreach($subDir as $dir){
            $file = __DIR__."/$dir/$classname.php";
            var_dump($file);
            if(file_exists($file)) {
               require_once $file;
               break;
            }
        }
       
    };

    spl_autoload_register($autoload);


    //serializzazione json
    $alunni = [
        new Alunno("Mattia", "Cugusi", 18),
        new Alunno("Tommaso", "Parigi", 18),
        new Alunno("Niccolo", "Mancini", 18),
        new Alunno("Leonardo", "Tozzi", 18),
        new Alunno("Mattia", "Negri", 18),
        new Alunno("Pietro","Nencini", 18)
    ];


    foreach($alunni as $alunno){
        $alunno->toString();
    }

    $json = json_encode($alunni);

    //deserializzazione json

    $alunni2 = json_decode($json, true);
    $alunni = [];
    foreach($alunni2 as $al){
        $a = new Alunno($al('nome'), $al('cognome'), $al('eta'));
        $alunni [] = $a;
    }
   // file_put_contents("alunni.json", $json)

    ?>



