<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>
<main>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
        <?php echo $oeuvre['image'];?>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['title']; ?></h1>
            <p class="description"><?php echo $oeuvre['description']; ?></p>
            <p class="description-complete">
                Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.
            </p>
        </div>
    </article>

</main>
<?php include('footer.php'); ?>
</body>
</html>
