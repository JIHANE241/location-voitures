<?php
$host = "localhost";
$user = "root";
$pass = ""; // Mets ton mot de passe si besoin
$db = "autorush";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
