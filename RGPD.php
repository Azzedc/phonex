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

<!-- Include config.php file to connect to the database -->


<?php require_once 'header.php';
?>

<main>
    <section class="recent_products">
        <article class="product">
            <div class="content"> 
                <p>
                Cher utilisateur,

Nous prenons très au sérieux la protection de vos données personnelles et nous nous engageons à respecter la réglementation en vigueur en matière de protection des données, notamment le Règlement Général sur la Protection des Données (RGPD).

Nous collectons uniquement les données nécessaires à la fourniture de nos services et nous ne les utilisons que dans le cadre de cette finalité. Les données que nous collectons comprennent votre nom, votre prénom, votre adresse email et votre mot de passe hashé.

Nous conservons vos données personnelles pendant une durée limitée à [indiquez ici la durée de conservation, par exemple 3 ans]*. Passé ce délai, nous supprimons vos données de nos systèmes.

Nous utilisons des mesures techniques et organisationnelles pour garantir la sécurité de vos données personnelles et nous nous engageons à respecter vos droits en matière de protection des données, tels que le droit d'accès, de rectification, de suppression et de portabilité de vos données.

Si vous avez des questions ou des préoccupations concernant la protection de vos données personnelles, n'hésitez pas à nous contacter.

Cordialement,

L'équipe de [nom de l'entreprise]

*Note : la durée de conservation mentionnée peut varier en fonction de la finalité du traitement de vos données.
                </p>
            </div>
        </article>    
    </section>
</main>

<?php require_once 'footer.php';
?>
</html>