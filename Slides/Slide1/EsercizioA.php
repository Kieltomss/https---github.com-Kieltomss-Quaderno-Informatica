<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio A</title>
</head>
<body>
<?php
echo "<h1>Esercizio A</h1>";
echo "<p>Creazione di una tabella Pitagorica</p>";
echo "<h1>Tabella Pitagorica</h1>";
echo '<table border="1">';
for ($x = 1; $x <= 10; $x++) {
    echo "<tr>";
    for ($y = 1; $y <= 10; $y++) {
        $l = $x * $y;
        echo "<td>$l</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h3>Spiegazione dell'esercizio</h3>
<h4>Descrizione dell'esercizio:</h4>
<pre>
L'esercizio richiede la creazione di una Tabella Pitagorica, che è una matrice numerica utilizzata per visualizzare i prodotti di moltiplicazioni tra numeri interi.
In una tabella di dimensione 10x10, ogni cella contiene il prodotto dei numeri corrispondenti alla riga e alla colonna</pre>
<h4>Ragionamento Logico:</h4>
<pre>Il ragionamento logico per completare l'esercizio si sviluppa così:

-Strutturare la tabella: Ogni riga rappresenta un valore fisso di un fattore x, e ogni colonna rappresenta un altro fattore 

-Calcolare i prodotti: Il valore di ciascuna cella è il prodotto X x Y

-Formattare in HTML: Si utilizza il tag 'Table' per costruire la struttura della tabella e si popolano le celle con i risultati delle moltiplicazioni.</pre>
<h4>Snippet Di Codice PHP importante</h4>
<pre>.php
    for ($y = 1; $y <= 10; $y++) {
    $l = $x * $y;
    echo "td" $l "/td";
}
questo snippet è il "Cuore" dell'Esercizio, permette di generare una tabella utilizzando un ciclo "For".
usando la variabile di comodo $l per conservare il dato all'interno della tabella. </pre>
<a href="../Slide1/Slide1.html">Torna Indietro</a>
</body>
</html>