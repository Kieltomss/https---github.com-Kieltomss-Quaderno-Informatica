<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    button {
        padding: 10px 20px;
        background-color: #0056b3;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;

    }
    a {
        text-decoration: none;
        color: #0056b3;
        transition: color 0.3s;
    }
</style>
<body>
    <h1>Esegui il login</h1>
    <form action="" method="post">
        <label for="username_login">Nome utente:</label><br>
        <input type="text" name="username_login" required><br><br>
        <label for="password_login">Password:</label><br>
        <input type="password" name="password_login" required><br><br>
        <button type="submit">Login</button>
    </form>

    <?php
    // Percorso relativo al file dati.txt
    $filePath = __DIR__ . "/dati.txt";

    // Controlla se il file esiste
    if (!file_exists($filePath)) {
        echo "<p style='color:red;'>Errore: il file 'dati.txt' non esiste nel percorso specificato.</p>";
    } else {
        // Leggi le righe del file
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Se il modulo è stato inviato
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST["username_login"];
            $password = $_POST["password_login"];
            $credentials = $username . ";" . $password; // Crea la stringa da confrontare

            $isLoggedIn = false; // Flag per verificare se il login è riuscito

            // Controlla se le credenziali corrispondono
            foreach ($lines as $line) {
                if (trim($line) === $credentials) { // Confronta la stringa con il file
                    echo "<p style='color:green;'>Login eseguito con successo!</p>";
                    $isLoggedIn = true;
                    break;
                }
            }

            // Se nessuna corrispondenza è trovata
            if (!$isLoggedIn) {
                echo "<p style='color:red;'>Credenziali errate. Riprova.</p>";
            }
        }
    }
    ?>
        <br><br>
        <a href="Homepage.html" class="buttonLogin">Torna al menu principale</a>
</body>

</html>
