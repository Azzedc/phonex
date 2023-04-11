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
                        <p class="bio">PhoneX c'est nous, c'est eux, c'est vous !</p>
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
                    <img class="photos" src="https://media.licdn.com/dms/image/C4E03AQF2dYR4TiWB9g/profile-displayphoto-shrink_800_800/0/1656411160452?e=1686787200&v=beta&t=3r9hf7EOEWZXsPP2rMCo9-rhVV64ilsPANziyC3nIc0" alt="Logo">
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

<?php require_once 'footer.php';
?>
</html>