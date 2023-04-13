<?php
require_once 'config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit;
}
// ici on vérifie que c'est bien la variable POST avec en parametre phone_id sinon on ne rentre pas dans la boucle
// https://www.php.net/manual/fr/language.variables.superglobals.php
//On utilise la  variable superglobal avec request methode pour s'assurer du post et évité que quelqu'un accede au script.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phone_id'])) {
    $phone_id = $_POST['phone_id'];
    $user_id = $_SESSION['user_id'];
    
    $query = "DELETE FROM phone WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $phone_id, $user_id);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        header('Location: moncompte.php?deleted=true');
    } else {
        header('Location: moncompte.php?deleted=false');
    }
    $stmt->close();
} else {
    header('Location: moncompte.php');
}
?>