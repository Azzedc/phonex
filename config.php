<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "phonexmydb";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion: " . $conn->connect_error);
}
?>