<?php
$email = $_POST["email"];
$password = $_POST["password"];

//if (isset($fname);
//unset($email);
/*
if (isset($email) == 'david') {
    echo 'giusto';
    }else{
        echo 'sbagliato';
    }
    
if (isset($password) == 123) {
    echo 'giusto';
    }else{
        echo 'sbagliato';
    }
*/

echo "<!DOCTYPE html>";
echo "<html><head>";
echo "<title>es3</title>";

echo "<style>";
echo "body {";
echo "    font-family: Arial, sans-serif;";
echo "    background-color: #f4f4f9;";
echo "    margin: 0;";
echo "    padding: 0;";
echo "    color: #333;";
echo "    line-height: 1.6;";
echo "    width: 100%;";
echo "    overflow-x: hidden;";
echo "}";

echo ".container {";
echo "    max-width: 900px;";
echo "    margin: 0 auto;";
echo "    padding: 20px;";
echo "    background-color: #fff;";
echo "    border-radius: 8px;";
echo "    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);";
echo "    overflow: hidden;";
echo "}";

echo "h2 {";
echo "    font-size: 2.0em;";
echo "    color: #007bff;";
echo "    text-align: center;";
echo "    margin-top: 2px;";
echo "}";

echo "h3 {";
echo "    font-size: 1.5em;";
echo "    color: #444;";
echo "    margin-top: 30px;";
echo "}";

echo "p {";
echo "    font-size: 1.1em;";
echo "    max-width: 100%;";
echo "    margin: 20px 0;";
echo "    padding: 10px;";
echo "    background-color: #fff;";
echo "    border-radius: 8px;";
echo "    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);";
echo "}";

echo ".code-block {";
echo "    background-color: #282c34;";
echo "    color: #f8f8f2;";
echo "    padding: 20px;";
echo "    border-radius: 5px;";
echo "    width: 50%;";
echo "    font-size: 1.1em;";
echo "    margin: 20px 0;";
echo "}";

echo ".highlight {";
echo "    color: #d9534f;";
echo "    font-weight: bold;";
echo "}";  
echo "</style>";

echo "</head><body>";

echo "<div class='container'>";
echo "<h2>SPIEGAZIONE: Gestione dei Dati del Form</h2>";
echo "<p><button><a href='home.html'>Torna alla home</a></button></p>";
echo "<div class='section'>";
echo "<p>Questo codice PHP si occupa di raccogliere i dati inviati tramite il metodo <strong>POST</strong> da un modulo HTML. I dati vengono quindi processati e verificati all'interno del codice per determinare se l'utente ha inserito credenziali corrette o meno. </p>";

echo "<p>Quando l'utente invia il modulo, il server riceve i dati tramite le superglobali come <strong>\$_POST</strong>, che sono utilizzate per raccogliere i dati inviati con una richiesta <strong>POST</strong>. In questo caso, le variabili come <strong>\$email</strong> e <strong>\$password</strong> vengono memorizzate e poi verificate dal server.</p>";

echo "</div>";

echo "<div class='section'>";
echo "<h3>Verifica dei Dati Inseriti</h3>";
echo "<p>Il codice effettua una verifica per vedere se i dati inseriti dall'utente corrispondono a quelli previsti (ad esempio, se l'email è 'david' o se la password è '12345'). Se una delle due condizioni è vera, l'accesso è consentito; altrimenti, viene mostrato un messaggio di errore.</p>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>Come Funziona la Condizione di Controllo</h3>";
echo "<p>La condizione <code>if (\$email == \"david\" || \$password == \"12345\")</code> viene eseguita per verificare se almeno una delle due condizioni è vera:</p>";

echo "<div class='code-block'>";
echo "<code>";
echo "\$email == \"david\" || \$password == \"12345\"<br>";
echo "</code>";
echo "</div>";

echo "<p>Se almeno una delle due condizioni è soddisfatta, il codice stampa <span class='highlight'>ACCESSO CONSENTITO</span>. Altrimenti, viene visualizzato <span class='highlight'>ERRORE, ACCESSO NEGATO</span>.</p>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>Spiegazione Completa del Funzionamento</h3>";
echo "<p>In breve, il codice raccoglie i dati inseriti dall'utente in un modulo HTML, li verifica contro valori predefiniti (come nel nostro esempio) e fornisce l'accesso se i dati corrispondono. È una struttura di base per l'autenticazione dell'utente. Questa tecnica è utile in scenari in cui è necessario verificare l'identità dell'utente e fornire accesso solo se le credenziali sono corrette.</p>";

echo "<p><h3>STAMPA:</h3>";
        echo "<strong>email: </strong>" . $email . "<br>" . "<strong>password: </strong>" . $password;
        if ($email == "david" || $password == "12345") {
            echo "<br> Accesso consensito!!";
        }else{
            echo "<br> Errore, accesso negato!!";
        }
        echo "</p>";
echo "</div>";
echo "</div>";
echo "</body></html>";
?>