<?php
// Connessione al database
$servername = "localhost";
$username = "root"; // Il tuo username per il DB
$password = ""; // La tua password per il DB
$dbname = "update1.3"; // Il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Verifica se l'utente esiste nel DB
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Login riuscito
        echo "Login effettuato con successo!
        <a href='compito_20250204.html'><button>HOME</button></a>";
        
    } else {
        // Reindirizza alla pagina di registrazione
        echo "Errore le credenziali per accedere al DB sono errate!" . "<br>";
        echo "<a href='register.php'>inserisci i tuoi dati</a>";
        exit;
    }
}

?>
<?php
//EXTRA: STAMPA DEL DATABASE

$sql = "SELECT * FROM users"; // Query per selezionare tutti i dati dalla tabella 'users'
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Visualizza la tabella HTML
    echo "<h2>Dati della Tabella Users</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nome</th>
                <th>Cognome</th>
            </tr>";

    // Estrai i dati riga per riga
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["password"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["surname"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 risultati trovati";
}
?>