<body>
    <h1>Gestione pubblicazioni scientifiche </h1>

    <?php
        // Configurazione per la connessione al database
        $host = "localhost";        // Host del database (di solito 'localhost')
        $username = "root";         // Nome utente del database
        $password = "";             // Password del database
        $dbname = "Giornale_db";  // Nome del database
    
        // Creazione della connessione
        $conn = new mysqli($host, $username, $password, $dbname);
    
        // Controllo della connessione
        if ($conn->connect_error) {
            // Mostra un messaggio di errore in caso di connessione fallita
            echo "<p style='color: red;'>Connessione fallita: " . $conn->connect_error . "</p>";
        } else {
            // Mostra un messaggio di successo in caso di connessione riuscita
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    
        // Chiusura della connessione
        //$conn->close();
        ?>
   <form action="index.php" method="post">
        <input type="submit" name="view_table" value="Visualizza tabella">

    </form>


    <?php
    if (isset($_POST['view_table'])) {
        $result = $conn->query("SELECT * FROM Giornale");
        echo "<h2>Giornale</h2><table border='1'><tr><th>titolo</th><th>autore</th><th>data di pubblicazione</th><th>categoria</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['titolo'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['data'] . "</td><td>" . $row['categoria'] . "</td></tr>";
        }
        echo "</table>";
    }

    ?>




<p>Clicca sul link qui sotto per andare alla home:</p>
<a href="../../">HOME</a>
