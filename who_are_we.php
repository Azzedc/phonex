<?php
    session_start();
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

<main>
    <section class="team">
        <article class="person">
            <div class="content">
                <div class="image">
                    <img class="photos" src="images/image.jpg" alt="Logo">
                    <div class="phone_name">
                        <p class="name">Guillaume Levergeois
                        <p>Front-end developer</p>
                        <p class="bio">Pour moi, Phone_x c'est avant tout une solution bénéfique à tous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="person">
            <div class="content">
                <div class="image">
                    <img class="photos" src="images/gabm.jpg" alt="Logo">
                    <div class="phone_name">
                        <p class="name">Gabriel Michaud
                        <p>Leader</p>
                        <p class="bio">Pour moi, Phone_x c'est avant tout une solution bénéfique à tous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article><article class="person">
            <div class="content">
                <div class="image">
                    <img class="photos" src="images/azzed.png" alt="Logo">
                    <div class="phone_name">
                        <p class="name">Azzedine Ouahalou
                        <p>Back-end engineer</p>
                        <p class="bio">Pour moi, Phone_x c'est avant tout une solution bénéfique à tous.</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    <section class="team">
    </article><article class="person">
            <div class="content">
                <div class="image">
                    <img class="photos" src="images/kara.png" alt="Logo">
                    <div class="phone_name">
                        <p class="name">Gabriel Karakhanyan
                        <p>Marketing</p>
                        <p class="bio">Pour moi, Phone_x c'est avant tout une solution bénéfique à tous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article><article class="person">
            <div class="content">
                <div class="image">
                    <img class="photos" src="images/image.jpg" alt="Logo">
                    <div class="phone_name">
                        <p class="name">Mathis Guisset
                        <p>Data scientist</p>
                        <p class="bio">Pour moi, Phone_x c'est avant tout une solution bénéfique à tous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
</body>

<footer class="footer_other">
    <div>
        <a href="who_are_we.php">Qui sommes-nous?</a>
        <a href="sell.php">Revendre</a>
        <a href="legal_mentions.php">Mentions légales</a>
        <a href="RGPD.php">RGPD</a>
    </div>
</footer>
</html>