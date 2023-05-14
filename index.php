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
        <div id="liste-oeuvres">
        <?php foreach($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre-1.php">
                    <?php echo $oeuvre['image'];?>
                    <h2><?php echo $oeuvre['title']; ?></h2>
                    <p><?php echo $oeuvre['description']; ?></p>
                </a>    
            </article>
        <?php endforeach ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>