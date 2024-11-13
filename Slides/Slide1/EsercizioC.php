<?php
    $j = "*";
    $l = "" ;
    echo "<h1> Esercizio C </h1><br>";
    echo "<p>Triangoli di asterischi</p><br>";
    echo "<p>A)Crescente<p><br>";
    for($i=0 ; $i<10; $i++) {
        $l = $l . $j;
        echo "$l <br>";
    }
    $d = "**********" ;
    echo "<p>B)Decrescente<p><br>";
    for($e=10 ; $e>0; $e--) {
        echo "$d <br>";
        $d = substr($d, 0, strlen($d) - 1);
    }
    echo "<p>C) Decrescente specchiato</p><br>";

    $c = "**********";
    $lunghezza_iniziale = strlen($c);

    for ($k = $lunghezza_iniziale; $k > 0; $k--) {
        // Stampa gli spazi per l'allineamento specchiato e poi la stringa di asterischi
        echo str_repeat("&nbsp;&nbsp;", $lunghezza_iniziale - strlen($c)) . $c . "<br>";
        $c = substr($c, 0, -1);  // Rimuove un asterisco alla fine della stringa
    }
    $t = "*";
    $h = "";
    echo "<p>D)Crescente specchiato</p><br>";
    for($n=0 ; $n<10; $n++) {
        $h = $h . $t;
        echo str_repeat("&nbsp;&nbsp;", 9 - $n) . $h . "<br>";
    }


    echo '<button onclick="window.history.back()">Torna indietro</button>';
?>