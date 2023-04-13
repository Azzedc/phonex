<?php
include 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT id, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// password_verify Verifies that the given hash matches the given password.
// https://www.php.net/manual/en/function.password-verify.php
if ($user && password_verify($password, $user['password'])) {
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;
    
    header("Location: index.php");
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

$conn->close();
?>