<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<style>
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 10%;
    }
    label{
        display: block;
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: #0056b3;
        transition: color 0.3s;
    }
</style>
<body>
    <h1>Esegui il sign in inserendo i dati</h1>
    <form action="" method="post">
        <label for="username">Nome utente (lo userai per accedere) (univoco):</label><br>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Registrati</button>
    </form>

    <?php
    // Percorso relativo del file
    $filePath = __DIR__ . "/dati.txt";

    // Controlla se il file esiste
    if (!file_exists($filePath)) {
        echo "<p style='color:red;'>Errore: il file 'dati.txt' non esiste nel percorso specificato.</p>";
    } else {
        // Leggi le righe del file
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Se il modulo è stato inviato
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $isUnique = true; // Flag per verificare unicità username

            // Controlla se lo username esiste già
            foreach ($lines as $line) {
                $userData = explode(';', $line, 2); // Dividi username e password
                if ($_POST["username"] == $userData[0]) {
                    echo "<p style='color:red;'>Errore: nome utente già in uso. Riprova.</p>";
                    $isUnique = false;
                    break;
                }
            }

            if ($isUnique) {
                // Se lo username è unico, salva i dati
                echo "<p style='color:green;'>Dati caricati correttamente! Vai alla pagina di login.</p>";

                $dataToSave = $_POST["username"] . ";" . $_POST["password"] . "\n";
                $fileHandle = fopen($filePath, 'a');
                if ($fileHandle) {
                    fwrite($fileHandle, $dataToSave);
                    fclose($fileHandle);
                } else {
                    echo "<p style='color:red;'>Errore: impossibile scrivere nel file.</p>";
                }
            }
        }
    }
    ?>
    <br><br>
    <a href="Homepage.html" class="buttonLogin">Torna al menu principale</a>
</body>

</html>
