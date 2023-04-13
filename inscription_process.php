<?php

include 'config.php';


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];



if ($password != $password_confirm) {
    echo "Les mots de passe ne correspondent pas. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
    exit();
}

// PASSWORD_DEFAULT - Use the bcrypt pour le moment et et si mise à jour le hashage se met à jour
// https://www.php.net/manual/fr/reserved.variables.server.php
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "SELECT email FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Cet email est déjà utilisé. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
    exit();
}


$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Inscription réussie! <a href='connexion.php'>Connectez-vous ici.</a>";
} else {
    echo "Erreur lors de l'inscription. Veuillez réessayer. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
}

$conn->close();
?>
