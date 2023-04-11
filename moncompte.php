<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php");
    exit();
}

// Connexion à la base de données
require_once "config.php";

$user_id = $_SESSION['user_id'];

// Récupération des informations de l'utilisateur
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-32">
    <meta name="viewport" content="width=device-width">
    <title>phone_x</title>
    <link rel="stylesheet" href="1css.css?q=<?php echo time(); ?>">
</head>

<body>


<?php require_once 'header.php';
?>

    <section>
        <h1>Profil de <?php echo htmlspecialchars($user['username']); ?></h1>
        <p>Email : <?php echo htmlspecialchars($user['email']); ?></p>
    </section>

<section class="recent_products">
    <article class="sell_form">
<?php
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM phone WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$phones = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>
<table>
    <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Stockage</th>
            <th>Couleur</th>
            <th>État</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($phones as $phone): ?>
            <tr>
                <td><?php echo htmlspecialchars($phone['marque']); ?></td>
                <td><?php echo htmlspecialchars($phone['modele']); ?></td>
                <td><?php echo htmlspecialchars($phone['stockage']); ?></td>
                <td><?php echo htmlspecialchars($phone['couleur']); ?></td>
                <td><?php echo htmlspecialchars($phone['etat']); ?></td>
                <td>
                    <form method="post" action="delete_phone.php">
                        <input type="hidden" name="phone_id" value="<?php echo $phone['id']; ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</article>
</main>

<?php require_once 'footer.php';
?>

</body>
</html>