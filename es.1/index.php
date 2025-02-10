<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Automobili</h1>

    <?php
    require_once "./Automobile.php";

    $auto = [
        new Automobile("Fiat", 2018, "Panda"),
        new Automobile("Fiat", 2016, "Punto"),
        new Automobile("Mercedes", 2023, "Classe E")
    ];

    foreach($auto as $automobile){
        $automobile->toString();
    }
    
    ?>

</body>
</html>