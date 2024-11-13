<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio A</title>
</head>
<body>
    <h2>Esercizio A</h2><br>
    <h3>Controllo Credenziali </h3>
    <h3>Accesso a pagina riservata</h3>
    <form action="EsercizioA.php" method="post">
        <label for="Username"><b>Username</b>: </label>
        <input type="text" name="username" placeholder="Inserisci il nome utente"><br>
        <label for="Username"><b>Password</b>: </label>
        <input type="password" name="password"placeholder = "Inserisci la password"><br>
        <input type="submit" type="Submit" value="Invia">

    </form>
    <?php
// Controlla se i dati sono stati inviati
if (isset($_POST['username']) && isset($_POST['password'])) {
    $usr = $_POST['username'];
    $psw = $_POST['password'];

    // Controlla username e password
    if ($usr != "admin" || $psw != "password") {
        echo "Nome utente o password non validi!";
    } else {
        echo "<h4>Benvenuto, $usr <br> nell'area riservata</h4>";
    }
}
?>
</body>
</html>