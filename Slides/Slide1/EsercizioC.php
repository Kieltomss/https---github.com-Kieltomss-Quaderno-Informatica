<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsercizioC</title>
</head>
<body>
    <style>
        body {font-family: monospace;}
    </style>


<?php
    $j = "*";
    $l = "" ;
    echo "<h1> Esercizio C </h1><br>";
    echo "<h2>Triangoli di asterischi</h2><br>";
    echo "<h3>A)Crescente<h3><br>";
    for($i=0 ; $i<10; $i++) {
        $l = $l . $j;
        echo "$l <br>";
    }
    $d = "**********" ;
    echo "<h3>B)Decrescente<h3><br>";
    for($e=10 ; $e>0; $e--) {
        echo "$d <br>";
        $d = substr($d, 0, strlen($d) - 1);
    }
    echo "<h3>C) Decrescente specchiato</h3><br>";

    $c = "**********";
    $lunghezza_iniziale = strlen($c);

    for ($k = $lunghezza_iniziale; $k > 0; $k--) {
        // Stampa gli spazi per l'allineamento specchiato e poi la stringa di asterischi
        echo str_repeat("&nbsp;", $lunghezza_iniziale - strlen($c)) . $c . "<br>";
        $c = substr($c, 0, -1);  // Rimuove un asterisco alla fine della stringa
    }
    $t = "*";
    $h = "";
    echo "<h3>D)Crescente specchiato</h3><br>";
    for($n=0 ; $n<10; $n++) {
        $h = $h . $t;
        echo str_repeat("&nbsp;", 9 - $n) . $h . "<br>";
        
    }
    echo "<a href=../Slide1/Slide1.html>Torna Indietro</a>"

?>

</body>
</html>