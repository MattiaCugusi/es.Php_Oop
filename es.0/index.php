<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alunni</h1>

    <?php
    require_once "./Alunno.php";

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
    

    ?>




</body>
</html>