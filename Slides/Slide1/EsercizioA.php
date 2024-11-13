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
echo '<button onclick="window.history.back()">Torna indietro</button>';
?>
