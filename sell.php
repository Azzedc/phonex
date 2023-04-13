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
    <section class="annonce_form">
    <article class="product_form">
            <p>Remplissez les formulaires suivant pour procéder à la revente</p>
        </article>
    </section>
    <section class="revendre_products">
        <article class="sell_form">
            <!-- Voir add_phone.php pour la méthode de post  -->
            <form  method="post" action="add_phone.php">
                    <p>
                        <label for="marque">Marque du téléphone</label><br />
                        <select name="marque" id="marque">
                            <option value="">Choisir</option>
                            <option value="Apple">Apple</option>
                            <option value="Samsung">Samsung</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="Oppo">Oppo</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Redmi">Redmi</option>
                        </select>
                    </p>
                    <p>
                        <label for="modele">Modèle du téléphone</label><br />
                        <input style="width: 20%" type="text" name="modele" id="modele" required>
                    </p>
                    <p>
                        <label for="etat">État du téléphone</label><br />
                        <select name="etat" id="etat">
                            <option value="">Choisir</option>
                            <option value="Comme neuf">Comme neuf</option>
                            <option value="Très bon état">Très bon état</option>
                            <option value="Bon état">Bon état</option>
                            <option value="État moyen">État moyen</option>
                            <option value="Mauvais état">Mauvais état</option>
                            <option value="Non-fonctionnel">Non-fonctionnel</option>
                        </select>
                    </p>
                    <p>
                        <label for="couleur">Couleur du téléphone</label><br />
                        <select name="couleur" id="couleur">
                            <option value="">Choisir</option>
                            <option value="Noir">Noir</option>
                            <option value="Blanc">Blanc</option>
                            <option value="Bleu">Bleu</option>
                            <option value="Rouge">Rouge</option>
                            <option value="Rose">Rose</option>
                            <option value="Jaune">Jaune</option>
                        </select>
                    </p>
                    <p>
                    <label for="stockage">Capacité de stockage</label><br />
                    <select name="stockage" id="pays">
                        <option value="">Choisir</option>
                        <option value="64go">64go</option>
                        <option value="128go">128go</option>
                        <option value="256go">256go</option>
                        <option value="512go">512go</option>
                        <option value="1to">1to</option>
                        <option value="2to">2to</option>
                    </select>
                </p>
                <p>
        <input type="submit" value="Ajouter un téléphone">
    </p>
            </form>
            </article>

    </section>
    <section class="recent_products">
       <article class="product">
            <div class="content">
                <div class="image">
                    <a href="sell.php"><img src="images/iphone-14.png" alt="Iphone 14 picture"></a>
                    <div class="phone_name">
                        <p>Iphone 14 Pro Max
                        <div class="price">
                        <p>Reprise à partir de 699€</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="product">
            <div class="content">
                <div class="image">
                    <a href="sell.php"><img src="images/iphone 12.png" alt="Iphone 12 picture"></a>
                    <div class="phone_name">
                        <p>Iphone 12
                        <div class="price">
                        <p>Reprise à partir de 499€</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="product">
            <div class="content">
                <div class="image">
                    <a href="sell.php"><img src="images/samsung.png" alt="Samsung phone"></a>
                    <div class="phone_name">
                        <p>Samsung A12
                        <div class="price">
                        <p>Reprise à partir de 199€</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>

<?php require_once 'footer.php';
?>
</html>