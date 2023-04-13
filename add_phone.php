<?php
session_start();


if (!isset($_SESSION['user_id'])) {
  header("Location: connexion.php");
  exit();
}

require_once "config.php";

$marque = $_POST['marque'];
$modele = $_POST['modele'];
$stockage = $_POST['stockage'];
$couleur = $_POST['couleur'];
$etat = $_POST['etat'];

$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO phone (user_id, marque, modele, stockage, couleur, etat) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssss", $user_id, $marque, $modele, $stockage, $couleur, $etat);

if ($stmt->execute()) {
  header("Location: index.php?phone_added=true");
}

$stmt->close();
$conn->close();
?>