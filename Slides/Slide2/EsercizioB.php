<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio A - Login</title>
</head>
<body>
    <h2>Esercizio B</h2><br>
    <h3>Accesso a pagina riservata</h3>

    <?php
    // Verifica se la richiesta è di tipo POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati dal form
        $usr = isset($_POST['username']) ? $_POST['username'] : '';
        $psw = isset($_POST['password']) ? $_POST['password'] : '';

        // Controlla username e password
        if ($usr == "admin" && $psw == "password") {
            // Credenziali corrette: mostra il messaggio di benvenuto e il pulsante per tornare al login
            echo "<h4>Benvenuto, $usr <br> nell'area riservata</h4>";
            echo '
                <form action="" method="get">
                    <input type="submit" value="Torna al login">
                </form>
            ';
        } else {
            // Credenziali errate: mostra il messaggio di errore e il form di login
            echo "<p style='color: red;'>Nome utente o password non validi!</p>";
            mostraForm();
        }
    } else {
        // La richiesta non è di tipo POST: mostra il form di login
        mostraForm();
    }

    // Funzione per mostrare il form di login
    function mostraForm() {
        echo '
            <form action="" method="post">
                <label for="username"><b>Username</b>: </label>
                <input type="text" name="username" placeholder="Inserisci il nome utente"><br>
                <label for="password"><b>Password</b>: </label>
                <input type="password" name="password" placeholder="Inserisci la password"><br>
                <input type="submit" value="Invia">
            </form>
        ';
    }
    ?>
       <a href="../Slide2/Slide2.html">Indietro agli Esercizi</a>
</body>
</html>
