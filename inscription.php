<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-32">
    <meta name="viewport" content="width=device-width">
    <title>phone_x - Inscription</title>
    <link rel="stylesheet" href="1css.css?q=<?php echo time(); ?>">
</head>

<?php require_once 'header.php';
?>
    <section class="connexion">
        <article class="article_connexion">
            <a href="index.php"><img src="images/logo_phonex.png" alt="Logo" style="width: 200px;"></a>
            <h2 style="margin-bottom: 4%">Inscription</h2>
            <!-- CF inscription_process.php -->
            <form class="form_connexion" action="inscription_process.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input style="border-radius: 1%;" type="connexion" name="username" id="username" required><br>
                
                <label for="email">Email :</label>
                <input style="border-radius: 1%;" type="connexion" name="email" id="email" required><br>
                
                <label for="password">Mot de passe :</label>
                <input style="border-radius: 1%;" type="password" name="password" id="password" required><br>
                
                <label for="password_confirm">Confirmer le mot de passe :</label>
                <input style="border-radius: 1%;" type="password" name="password_confirm" id="password_confirm" required><br>
                
                <button style="border-radius: 1%;" type="submit">S'inscrire</button>
                <p>
                    <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms">J'accepte les <a href="conditions_generales.php" target="_blank">conditions d'utilisation</a> et les règles <a href="legal_mentions.php" target="_blank">RGPD</a>.</label>
                </p>
            </form>
                <div class="to_register">
                    <h4>Déjà inscrit ? <a href="connexion.php">Cliquez ici</a></h4>
                </div>
            </div>
        </article>
        <img class="image_inscription" src="images/pexel_inscr.jpg" alt="Samsung phone">
    </section>

    <?php require_once 'footer.php';
?>
</html>