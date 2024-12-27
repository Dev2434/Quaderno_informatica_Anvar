<?php
$email = $_POST['email'];
$password = $_POST['password'];

echo "<!DOCTYPE html>
<head>
<title>es1</title>
<style>
    body{ 
        font-family: Arial, sans-serif; 
        background-color: #f4f4f9; 
        margin: 0; padding: 20px; 
        color: #333; 
    }

    h2{ 
        color: #4CAF50; 
        text-align: center; 
    }

    .container{ 
        max-width: 900px; 
        margin: 0 auto; 
        background-color: #fff; 
        padding: 20px; 
        border-radius: 8px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }
    .section{ 
        margin-bottom: 20px; 
    }

    .code-block{ 
        background-color: #f0f0f0; 
        padding: 15px; 
        border-left: 4px solid #4CAF50; 
        font-family: monospace; 
        overflow-x: auto; 
        border-radius: 5px; 
    }

    .highlight{ 
        color: #d9534f; 
        font-weight: bold; 
    }

    p{ 
        line-height: 1.6; 
    }

    strong{ 
        color: #333;
    }
</style>

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