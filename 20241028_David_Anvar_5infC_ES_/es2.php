<?php
//phpinfo();
$fname = $_POST['email'];
$lname = $_POST['password'];
$name = "David";

echo "<!DOCTYPE html>";
echo "<head>";
echo "<title>es2</title>";

echo "<style>";
echo "body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px; color: #333; }";
echo "h2 { color: black; text-align: center; }";
echo "h3 { color: #007BFF; }";
echo ".container { max-width: 900px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }";
echo ".section { margin-bottom: 20px; }";
echo ".code-block { background-color: #f0f0f0; padding: 15px; border-left: 4px solid #4CAF50; font-family: monospace; overflow-x: auto; border-radius: 5px; }";
echo ".highlight { color: #d9534f; font-weight: bold; }";
echo "p { line-height: 1.6; }";
echo "strong { color: #333; }";
echo ".note { background-color: #ffeb3b; padding: 10px; border-radius: 5px; font-weight: bold; color: #333; margin-top: 20px; }";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='container'>";
echo "<h2>SPIEGAZIONE: isset() e unset() in PHP</h2>";
echo "<p><button><a href='home.html'>Torna alla home</a></button></p>";
echo "<div class='section'>";
echo "<h3>1. La funzione isset()</h3>";
echo "<p><strong>isset()</strong> è una funzione in PHP che verifica se una variabile è stata definita e se il suo valore non è <strong>null</strong>.</p>";
echo "<p>La sintassi di <strong>isset()</strong> è:</p>";
echo "<div class='code-block'>";
echo "<code>";
echo "isset(\$variabile)";
echo "</code>";
echo "</div>";
echo "<p>Restituisce <strong>true</strong> se la variabile è definita e ha un valore diverso da <strong>null</strong>, altrimenti restituisce <strong>false</strong>.</p>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>2. La funzione unset()</h3>";
echo "<p><strong>unset()</strong> è una funzione in PHP che distrugge (rimuove) una variabile, eliminandola dalla memoria.</p>";
echo "<p>La sintassi di <strong>unset()</strong> è:</p>";
echo "<div class='code-block'>";
echo "<code>";
echo "unset(\$variabile)";
echo "</code>";
echo "</div>";
echo "<p>Dopo aver utilizzato <strong>unset()</strong>, la variabile non esiste più e non può essere usata nel programma.</p>";
echo "<p><strong>Risultato:</strong> Prima di chiamare <strong>unset()</strong>, la variabile <span class='highlight'>\$name</span> è definita. Dopo l'uso di <strong>unset()</strong>, la variabile è eliminata dalla memoria e non esiste più.</p>";

echo "<p><strong> Stampa PHP:</strong></p>";




if (isset($name)) { //Verifico se la variabile $name è definita prima di usare unset()
    echo "Prima di unset: La variabile 'name' è definita e ha il valore: $name<br>";
}

unset($name);// Rimuovo la variabile 'name'

if (isset($name)) { //Verifico se la variabile $name è ancora definita dopo unset()
    echo "Dopo unset: La variabile 'name' è definita.";
} else {
    echo "Dopo unset: La variabile 'name' non è definita.";
}





echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";

?>