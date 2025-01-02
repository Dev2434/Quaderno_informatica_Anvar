<?php
$email = $_POST['email'];
$password = $_POST['password'];

echo "<!DOCTYPE html>
<head>
<title>es1</title>
</head>
<body>
<div class='container'>
<h2>SPIEGAZIONE</h2>
<p><button><a href='home.html'>Torna alla home</a></button></p>
<div class='section'>
<p><strong>1. Raccolta dei dati inviati tramite il modulo (con il metodo POST):</strong></p>
    <div class='code-block'>
        <code>
        \$email = \$_POST[\"email\"];<br>
        \$password = \$_POST[\"password\"];<br>
        </code>
    </div>
<p>Questa parte del codice raccoglie i dati inviati tramite il metodo POST da un modulo HTML. La superglobale <span class='highlight'>\$_POST</span> contiene tutti i dati inviati con il metodo POST. In questo caso, il codice recupera il valore dei campi 'email' e 'password' inviati dall'utente.</p>
</div>

<div class='section'>
<p><strong>2. Visualizzazione dei dati con echo:</strong></p>
    <div class='code-block'>
    <code>
    echo \$email . \"<br>\" . \$password;<br>
    </code>
    </div>
<p>Il comando <strong>echo</strong> in PHP serve a visualizzare i valori sullo schermo. In questo caso, il codice concatena la variabile <span class='highlight'>\$email</span> con il tag HTML <strong>&lt;br&gt;</strong>, e successivamente concatena anche la variabile <span class='highlight'>\$password</span>, per far sì che i valori vengano mostrati su due righe separate.</p>
</div>
<div class='note'>
<p><strong>Non è sicuro mostrare la password in chiaro in un'applicazione reale.</strong></p>
<strong>Ecco cosa ha stampato, in base a quello che ha scritto l'utente:</strong> <br>
";

echo "email: " . $email . "<br>" . "password: " . $password;

echo "
</div>
</div>
</body>
</html>
";
?>