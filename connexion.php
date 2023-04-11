<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-32">
    <meta name="viewport" content="width=device-width">
    <title>phone_x - Connexion</title>
    <link rel="stylesheet" href="1css.css?q=<?php echo time(); ?>">
</head>

<body>

<?php require_once 'header.php';
?>
<body>

    <section class="connexion">
        <article class="article_connexion">
            <a href="index.php"><img src="images/logo_phonex.png" alt="Logo" style="width: 200px;"></a>
            <h2 style="margin-bottom: 2.5%">Connexion</h2>
            <div class="champ_connexion">
            <form action="connexion_process.php" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            
            <button type="submit">Se connecter</button>
        </form>
                <div class="to_register" style="margin-top: 20%">
                    <h4>Pour vous inscrire <a href="inscription.php">Cliquez ici</a></h4>
                </div>
            </div>
        </article>
    </section>

    <footer class="footer_other">
    <div>
        <a href="who_are_we.php">Qui sommes-nous?</a>
        <a href="sell.php">Revendre</a>
        <a href="legal_mentions.php">Mentions légales</a>
        <a href="RGPD.php">RGPD</a>
    </div>
</footer>
</html>