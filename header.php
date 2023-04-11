<header>
    <div id="left">
        <a href="index.php"><img src="images/logo_phonex.png" alt="Logo" style="width: 150px;height: 40px;"></a>
        <a href="who_are_we.php">Qui sommes-nous?</a>
        <a href="sell.php">Revendre</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="moncompte.php">Mon compte</a>
        <?php endif; ?>
    </div>
    <div id="right">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span>Bonjour, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
            <a href="deconnexion.php">Se déconnecter</a>
        <?php else: ?>
            <a href="connexion.php">Se connecter</a>
            <a href="inscription.php">S'inscrire</a>
        <?php endif; ?>
    </div>
</header>