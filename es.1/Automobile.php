<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile</title>
</head>
<body>
    <h1>Automobile</h1>

    <?php
        class Automobile extends Veicolo{
            private $modello;


        public function __construct($marca, $anno, $modello){
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        public function getModello(){
            return $this->modello;
        }

        public function setModello(){
            $this->modello = $modello;
        }




        }
    ?>
</body>
</html>