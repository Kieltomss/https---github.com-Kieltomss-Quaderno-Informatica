<?php
    echo "<h1>Esercizio B</h2>";
    echo "<h3>Pagina PHP dinamica con saluto basato sull'ora, benvenuto personalizzato, e rilevazione del browser in uso</h3>";

    // Recupera la stringa dell'User Agent dell'utente
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Verifica il browser utilizzato in base all'User Agent
    if (strpos($userAgent, 'OPR') !== false || strpos($userAgent, 'Opera') !== false) {
        $browser = "Opera";
    } elseif (strpos($userAgent, 'Edg') !== false) { // 'Edg' per la nuova versione di Edge
        $browser = "Microsoft Edge";
    } elseif (strpos($userAgent, 'Chrome') !== false && strpos($userAgent, 'Safari') !== false) {
        $browser = "Google Chrome";
    } elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
        $browser = "Apple Safari";
    } elseif (strpos($userAgent, 'Firefox') !== false) {
        $browser = "Mozilla Firefox";
    } elseif (strpos($userAgent, 'Trident') !== false || strpos($userAgent, 'MSIE') !== false) { // Trident/MSIE per Internet Explorer
        $browser = "Internet Explorer";
    } else {
        $browser = "un browser sconosciuto";
    }


    // Mostra il risultato
    echo "Stai usando il browser $browser.";
    $today = new DateTime('now', new DateTimeZone ('Europe/Rome'));
    echo "<br>";
    echo "Oggi è il ";
    echo $today->format('m/d/Y');
    $ora = $today->format('H');
    $nome = "Paolo";
    echo "\n <br>Sono le $ora";
    if ($ora > 8 && $ora < 13){
        echo "\n <br>Buongiorno! $nome <br>";
    }
    elseif ($ora >= 13 && $ora <= 20){
        echo "\n <br>Buonasera $nome <br>";
    }
    else{
        echo "\n <br>Buonanotte $nome <br>";
    }
    echo '<button onclick="window.history.back()">Torna indietro</button>';
?>