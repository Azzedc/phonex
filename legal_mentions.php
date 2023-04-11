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
        <article class="rgpd">
            <div class="content"> 
                <p>
                Nom de l'entreprise : PhoneX<br>
                Adresse de l'entreprise : 4 Rue Paul Bernies, 31200 Toulouse
                </p>
            </div>
        </article>    
    </section>
    <section class="recent_products">
        <article class="rgpd">
            <div class="content"> 
                <p>
                Coordonnées :<br>
                Numéro de téléphone : 01 23 45 67 89<br>
                Adresse mail : phonex_contact@gmail.com
                </p>
            </div>
        </article>    
    </section>
    <section class="recent_products">
        <article class="rgpd">
            <div class="content"> 
                <p>
                Dirigeant de l'entreprise :<br>
                Nom : Guillaume Levergeois<br>
                Adresse : 4 Rue Paul Bernies, 31200 Toulouse<br>
                Numéro de téléphone : 05 01 87 23 94<br>
                Adresse mail : levergeois_guillaume_phonex@gmail.com
                </p>
            </div>
        </article>    
    </section>
    <section class="recent_products">
        <article class="rgpd">
            <div class="content"> 
                <p>
                Cher utilisateur,<br>
                <br>
Nous prenons très au sérieux la protection de vos données personnelles et nous nous engageons à respecter la réglementation en vigueur en matière de protection des données, notamment le Règlement Général sur la Protection des Données (RGPD).<br>
<br>
Nous collectons uniquement les données nécessaires à la fourniture de nos services et nous ne les utilisons que dans le cadre de cette finalité. Les données que nous collectons comprennent votre nom, votre adresse email et votre mot de passe hashé.<br>
<br>
Nous conservons vos données personnelles pendant une durée limitée à 3 ans*. Passé ce délai, nous supprimons vos données de nos systèmes.<br>
<br>
Nous utilisons des mesures techniques et organisationnelles pour garantir la sécurité de vos données personnelles et nous nous engageons à respecter vos droits en matière de protection des données, tels que le droit d'accès, de rectification, de suppression et de portabilité de vos données.<br>
<br>
Si vous avez des questions ou des préoccupations concernant la protection de vos données personnelles, n'hésitez pas à nous contacter.<br>
<br>
Cordialement,<br>
<br>
L'équipe de PhoneX<br>
<br>
*Note : la durée de conservation mentionnée peut varier en fonction de la finalité du traitement de vos données.<br>
                </p>
            </div>
        </article>    
    </section>
    <section class="recent_products">
        <article class="rgpd">
            <div class="content"> 
                <a href="conditions_generales.php">Conditions générales d'utilisation</a>
            </div>
        </article>    
    </section>
</main>

<?php require_once 'footer.php';
?>