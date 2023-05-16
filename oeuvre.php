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
<?php foreach($oeuvres as $oeuvre) : ?>

    <?php  $Url = $_GET['oeuvre']
?>  

    <?php if (array_key_exists('id', $oeuvre) && $oeuvre['id'] == $Url): ?>

        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <?php echo $oeuvre['image'];?>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['title']; ?></h1>
                <p><?php echo $oeuvre['description']; ?></p>
                <p><?php echo $oeuvre['description-complete']; ?></p>
            </div>
        </article>
    </main>
    <?php endif; ?>
<?php endforeach ?>
<?php include('footer.php'); ?>
</body>
</html>
