<?php
// Inclure le fichier de configuration pour se connecter à la base de données
include 'config.php';

// Récupérer les données soumises par le formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


// Vérifier si les mots de passe correspondent
if ($password != $password_confirm) {
    echo "Les mots de passe ne correspondent pas. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
    exit();
}

// Hacher le mot de passe pour le stocker de manière sécurisée
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Vérifier si l'email existe déjà dans la base de données
$sql = "SELECT email FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Cet email est déjà utilisé. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
    exit();
}

// Insérer le nouvel utilisateur dans la base de données
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Inscription réussie! <a href='connexion.php'>Connectez-vous ici.</a>";
} else {
    echo "Erreur lors de l'inscription. Veuillez réessayer. <a href='inscription.php'>Retourner au formulaire d'inscription.</a>";
}

// Fermer la connexion à la base de données
$conn->close();
?>