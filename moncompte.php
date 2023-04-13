<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php");
    exit();
}

require_once "config.php";

$user_id = $_SESSION['user_id'];


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

    <section style="margin-top: 5%; margin-bottom: 5%;" class="recent_products">
        <article class="profil_form">
            <!-- Ici la fonction htmlspecialchars permet de se proteger des attaques attaques XSS (cross-site scripting) -->
            <!-- https://www.kaspersky.fr/resource-center/definitions/what-is-a-cross-site-scripting-attack -->
            <!-- htmlspecialchars convertit les charactères spéciaux en entités HTML qui empechera les script d'etre éxécuter -->
            <h1>Profil de <?php echo htmlspecialchars($user['username']); ?></h1>
            
            <p>Email : <?php echo htmlspecialchars($user['email']); ?></p>
        </article>  
    </section>

    <section class="recent_products">
        <article class="profil_form">
            <h2>Mes téléphones vendus</h2>
        </article>  
    </section>

<section class="recent_products">
    <article class="profil_form">

<!-- Requete pour récupéré les téléphones de l'utilisateurs -->
<!-- fetch_all permet de récupérer tout les result et MYSQLI_ASSOC pour récupéré sous tableau assiociatif -->
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
                    <!-- CF delete_phone.php -->
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
</section>

<section class="recent_products">
        <img class="img" src="images/pexel_phone.jpg" alt="Samsung phone">
        <img class="img" src="images/pexel_phone2.jpg" alt="Samsung phone">
        <img class="img" src="images/pexel_phone3.jpg" alt="Samsung phone">
        <img class="img" src="images/pexel_phone4.jpg" alt="Samsung phone">
</section>
<?php require_once 'footer.php';
?>

</body>
</html>