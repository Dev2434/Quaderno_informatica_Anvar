<?php
$username = $_POST["username"];
$password = $_POST["password"];

//$variabili = array('$username', '$password'); //indice 0 e 1
$var = [$username, $password];

/*
// Dichiarazione dell'array con tre variabili
$variabili = ['Prima variabile', 'Seconda variabile', 'Terza variabile'];
s
// Ciclo foreach per stampare tutte le variabili
foreach ($variabili as $valore) {
    echo $valore . "<br>";
}
*/

/*
 $david = array(0,1,2);
 foreach ($david as $x) {
    echo "$x <br>";
  }
*/
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>es4</title>";

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
echo "</head>";

echo "<body>";
echo "<div class='container'>";
echo "<h2>SPIEGAZIONE: Array in PHP</h2>";
echo "<p><button><a href='home.html'>Torna alla home</a></button></p>";
echo "<div class='section'>";
echo "<p><strong>\$_POST</strong> è una superglobale in PHP utilizzata per raccogliere i dati inviati tramite il metodo <strong>POST</strong> da un modulo HTML. In questo caso, il codice raccoglie i dati dai campi <strong>username</strong> e <strong>password</strong> inviati tramite il modulo.";
echo " Ad esempio, il valore inserito nel campo <strong>username</strong> sarà memorizzato nella variabile <code>\$username</code>, mentre il valore del campo <strong>password</strong> sarà memorizzato in <code>\$password</code></p>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>1. Creazione dell'Array \$var</h3>";
echo "<p>In questa parte del codice, viene creato un array chiamato <code>\$var</code> che contiene i valori delle variabili <code>\$username</code> e <code>\$password</code>:</p>";
echo "<div class='code-block'>";
echo "<code>";
echo "\$var = [\$username, \$password];<br>";
echo "</code>";
echo "</div>";
echo "<p>L'array risultante conterrà i valori che l'utente ha inserito nel modulo. Quindi l'utente ha inserito come username: <code>$username</code>, mentre nella password ha inserito: <code>$password</code>, e quindi l'array sarà:</p>";
echo "<div class='code-block'>";
echo "<code>";
echo "\$var = [\"$username\", \"$password\"];<br>";
echo "</code>";
echo "</div>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>2. Iterazione sull'Array con foreach</h3>";
echo "<p>Il ciclo <strong>foreach</strong> viene utilizzato per iterare su ogni elemento dell'array <code>\$var</code>. Ad ogni iterazione, il valore dell'elemento corrente viene assegnato alla variabile <code>\$valori</code> e viene stampato a schermo:</p>";
echo "<div class='code-block'>";
echo "<code>";
echo "foreach (\$var as \$valori) {<br>";
echo "    echo \"\$valori\";<br>";
echo "}<br>";
echo "</code>";
echo "</div>";
echo "<p>Ad esempio, se l'array contiene <code>\$username</code> e <code>\$password</code>, il ciclo <strong>foreach</strong> stamperà:</p>";
echo "<div class='code-block'>";
echo "<code>";
foreach ($var as $valori) {
  echo "$valori <br>";
}
echo "</code>";
echo "</div>";
echo "</div>";

echo "<p>Il codice PHP raccoglie i dati da un modulo HTML, li memorizza in un array, e utilizza un ciclo <code>foreach</code> per stampare i valori contenuti nell'array. È una tecnica utile per trattare i dati inviati dagli utenti tramite moduli HTML.</p>";  
echo "</div>";
echo "</body>";
echo "</html>";

?>