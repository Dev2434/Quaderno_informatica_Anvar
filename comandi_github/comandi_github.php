<?php

// Connessione al database
$servername = "localhost";  // O usa l'indirizzo IP se non è sulla macchina locale
$username = "root";       // Nome utente che hai creato
$password = "";       // La password per l'utente
$dbname = "github";   // Il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    // Ottieni l'ID dell'utente da eliminare
    $id = $_POST['ID_comando'];

    // Crea la query di eliminazione
    $sqlDelete = "DELETE FROM comandi_di_github WHERE ID_comando = $id";

    // Esegui la query
    if ($conn->query($sqlDelete) === TRUE) {
    }
}


$sql = "SELECT * FROM comandi_di_github"; // Query per selezionare tutti i dati dalla tabella 'users'
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Visualizza la tabella HTML
    echo "<h1>COMANDI UTILI DI GITHUB</h1>";

    echo"<p>Qui aggiungo tutti i comandi di github conosciuti al momento in base alle esperienze dello stage Tech7 ed esperienze scolastiche <br><br>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>NOME DEL COMANDO</th>
                <th>DESCRIZIONE</th>
                <th>ELIMINA</th>
            </tr>";

    // Estrai i dati riga per riga
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID_comando"] . "</td>
                <td>" . $row["nome_comando"] . "</td>
                <td>" . $row["descrizione_comando"] . "</td>
                <td>
                <form method='POST' action=''>
                    <input type='hidden' name='ID_comando' value='" . $row['ID_comando'] . "'>
                    <input type='submit' name='delete' value='Elimina'>
                </form>
                </td>
            </tr>";
        }
    echo "</table>";
    echo "<br><a href='add_comando.php'><button>Aggiungi un comando</button></a>";
    echo "<br><br><a href='comandi_github.html'><button>Torna indietro</button></a>";
} else {
    echo "0 risultati trovati";
    echo "<br><a href='add_comando.php'><button>Aggiungi un comando</button></a>";
    echo "<br><br><a href='comandi_github.html'><button>Torna indietro</button></a>";
}
?>