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
                        <p>Samsung
                        <div class="price">
                        <p>Reprise à partir de 199€</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="revendre">
        <article class="product">
                <div class="content">   
                    <div class="revendre_txt">
                        <a href="sell.php">Faire une estimation de votre téléphone en quelques clics</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="revendre">
        <article class="faq_article">
                <div class="content">   
                    <div class="revendre_txt">
                        <p class="faq_title">Questions fréquemments posées</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="faq_article">
                <div class="content">   
                    <div class="revendre_txt">
                    <p class="faq" style="float:right"><img class="faq_images" src="images/broken.jpg" alt="Broken phone"></p>
                        <p class="faq_title">Est-il possible de revendre un téléphone abîmé ou non-fonctionnel?</p><br>
                            <p style="line-height:35px;">Bien sûr ! L'état sera demandé au moment de la proposition de vente du produit.<br>
                            A la suite de cela, un prix de reprise vous sera proposé. Libre à vous d'accepter ou non.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="faq_article">
                <div class="content">   
                    <div class="revendre_txt">
                        <p class="faq_title">Comment revendre son téléphone?</p><br> 
                        <p class="faq" style="float:left"><img class="faq_images_left_strange" src="images/question.jpg" alt="question answer image"></p>
                            <p class = "faq_text" style="line-height:35px;">C'est simple, après la confirmation d'offre d'achat,<br>
                             vous recevrez un colis dans les 5 jours ouvrés.<br>
                            Il vous suffit alors de mettre votre téléphone dedans avec votre chargeur,<br>
                             sans coque de protection, ni boîte d'origine.<br>
                            Une fois cela fait, collez l'étiquette de renvoi sur le carton et<br>
                             déposez le en bureau de poste ou en point relais.
                        </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="faq_article">
                <div class="content">   
                    <div class="revendre_txt">
                        <p class="faq_title">Y'a-t'il des frais d'envois?</p><br>
                        <p class="faq" style="float:right"><img class="faq_images_right" src="images/colis.jpg" alt="colis image"></p>
                            <p class ="faq_text" style="line-height:35px;">Non, aucun frais d'envoi. Ils sont réglés par nous. </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="faq_article">
                <div class="content">   
                    <div class="revendre_txt">
                        <p class="faq_title">En combien de temps recevrai-je mon argent?</p><br>
                        <p class="faq" style="float:left"><img class="faq_images_left" src="images/money.jpg" alt="waiting image"></p>
                            <p style="line-height:35px;">Une fois le colis reçu, nous vérifions le contenu du colis et l'état du téléphone.<br>
                            Si celui-ci est conforme à l'état décrit, alors le processus de payement est enclenché.<br>
                            En tout, de la livraison au payement, il faut compter entre 3 à 10 jours ouvrés.
                        </p>
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
