<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tabella dei Quadrati e dei Cubi</h1>
<p>Seleziona un numero intero (da 1 a 10)</p>
<form action="" method="POST">
        <select name="valore" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" value="Crea Tabella">
    </form>
<?php
if (isset($_POST['valore'])){
    $x = intval($_POST['valore']);
    for($i = 0 ; $i < $x; $i++){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Numero</th>";
        echo "<th>Quadrato</th>";
        echo "<th>Cubo</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".($i+1)."</td>";
        echo "<td>".pow(($i+1),2)."</td>";
        echo "<td>".pow(($i+1),3)."</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
    }
}


?>
<br>
<a href="../Slide2/Slide2.html">Torna Indietro</a>
</body>
</html>