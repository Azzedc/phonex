<?php
// Inclure le fichier de configuration pour se connecter à la base de données
include 'config.php';

// Récupérer les informations d'identification soumises par le formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête SQL pour récupérer l'utilisateur avec le nom d'utilisateur soumis
$sql = "SELECT id, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Vérifier si l'utilisateur existe et si le mot de passe est correct
if ($user && password_verify($password, $user['password'])) {
    // Démarrer la session et enregistrer l'ID utilisateur dans la session
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;
    
    // Rediriger vers la page d'accueil
    header("Location: index.php");
} else {
    // Message d'erreur si les informations d'identification sont incorrectes
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

// Fermer la connexion à la base de données
$conn->close();
?>