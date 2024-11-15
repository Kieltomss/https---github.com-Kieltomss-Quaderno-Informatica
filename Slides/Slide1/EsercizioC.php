<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio C</title>
</head>
<body>
    <?php
    $j = "*";
    $l = "" ;
    echo "<h1> Esercizio C </h1><br>";
    echo "<h2>Triangoli di asterischi</h2><br>";
    
    // Triangolo crescente
    echo "<h3>A) Crescente</h3><br>";
    for($i = 0; $i < 10; $i++) {
        $l = $l . $j;  // Aggiunge un asterisco per ogni iterazione
        echo "$l <br>";
    }
    
    // Triangolo decrescente
    $d = "**********" ;
    echo "<h3>B) Decrescente</h3><br>";
    for($e = 10; $e > 0; $e--) {
        echo "$d <br>";
        $d = substr($d, 0, strlen($d) - 1);  // Rimuove un asterisco alla fine per ogni iterazione
    }
    
    // Triangolo decrescente specchiato
    echo "<h3>C) Decrescente specchiato</h3><br>";
    $c = "**********";
    $lunghezza_iniziale = strlen($c);  // Memorizza la lunghezza iniziale della stringa

    for ($k = $lunghezza_iniziale; $k > 0; $k--) {
        // Stampa gli spazi per l'allineamento specchiato e poi la stringa di asterischi
        echo str_repeat("&nbsp;&nbsp;", $lunghezza_iniziale - strlen($c)) . $c . "<br>";
        $c = substr($c, 0, -1);  // Rimuove un asterisco alla fine della stringa
    }
    
    // Triangolo crescente specchiato
    $t = "*";
    $h = "";
    echo "<h3>D) Crescente specchiato</h3><br>";
    for($n = 0; $n < 10; $n++) {
        $h = $h . $t;  // Aggiunge un asterisco per ogni iterazione
        echo str_repeat("&nbsp;&nbsp;", 9 - $n) . $h . "<br>";  // Aggiunge spazi prima degli asterischi per centrarli
    }
    
    // Link per tornare indietro
    echo "<a href='../Slide1/Slide1.html'>Torna Indietro</a>";
    ?>

    <h3>Spiegazione dell'Esercizio</h3>
    <h4>Descrizione dell'esercizio:</h4>
    <pre>
Questo esercizio genera quattro triangoli di asterischi, utilizzando vari approcci:
1. Crescente: Inizia con un solo asterisco e aggiunge un asterisco per ogni riga.
2. Decrescente: Parte da un massimo di 10 asterischi e li rimuove uno per volta.
3. Decrescente specchiato: Rimuove un asterisco per volta, ma allinea i triangoli a destra con gli spazi.
4. Crescente specchiato: Costruisce il triangolo in modo crescente, ma con spazi prima di ogni riga per allineare i triangoli al centro.
    </pre>
    <h4>Ragionamento Logico:</h4>
    <pre>
1. Triangolo crescente: Ogni riga aggiunge un asterisco alla fine della stringa $l.
2. Triangolo decrescente: Ogni riga rimuove un asterisco alla fine della stringa $d.
3. Triangolo decrescente specchiato: Utilizza str_repeat() per aggiungere spazi prima di ogni riga, per creare l'effetto specchiato.
4. Triangolo crescente specchiato: Aggiunge spazi prima della stringa di asterischi con str_repeat() per centrare i triangoli.
    </pre>
    <h4>Snippet di Codice PHP importante:</h4>
    <pre>
// Triangolo crescente
for($i = 0; $i < 10; $i++) {
    $l = $l . $j; // Aggiunge un asterisco per ogni iterazione
    echo "$l <br>";
}

// Triangolo decrescente
for($e = 10; $e > 0; $e--) {
    echo "$d <br>";
    $d = substr($d, 0, strlen($d) - 1); // Rimuove un asterisco per ogni iterazione
}

// Triangolo decrescente specchiato
for ($k = $lunghezza_iniziale; $k > 0; $k--) {
    echo str_repeat("&nbsp;", $lunghezza_iniziale - strlen($c)) . $c . "<br>";
    $c = substr($c, 0, -1); // Rimuove un asterisco alla fine
}

// Triangolo crescente specchiato
for($n = 0; $n < 10; $n++) {
    $h = $h . $t;
    echo str_repeat("&nbsp;", 9 - $n) . $h . "<br>";
}
    </pre>
    <h4>Comandi Importanti da Ricordare: </h4>
    <pre>
<b>str_repeat():</b>
Cosa fa: Ripete una stringa (in questo caso uno spazio) un numero specificato di volte.
Esempio: str_repeat("&nbsp;", 9 - $n) crea uno spazio per ogni iterazione per centrare il triangolo crescente.

<b>substr():</b>
Cosa fa: Estrae una parte della stringa, a partire da una posizione specificata.
Esempio: substr($d, 0, strlen($d) - 1) rimuove un asterisco dalla fine della stringa.

<b>strlen():</b>
Cosa fa: Restituisce la lunghezza di una stringa.
Esempio: strlen($c) è utilizzato per determinare la lunghezza della stringa iniziale di asterischi.
    </pre>
</body>
</html>
