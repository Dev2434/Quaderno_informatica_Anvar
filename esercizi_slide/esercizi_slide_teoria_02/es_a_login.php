<?php
$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "pw"){
    echo "Benvenuto " . $username . " nell'area riservata del sito!";
}else{
    echo "Pretendi di accedere al sito così facilmente?, STUPID";
}
?>