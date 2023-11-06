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
<header>
    <?php include_once('header.php'); ?>    
</header>
<main>
    <?php include_once('oeuvres.php'); ?>
    <?php if (isset($_GET['id'])) {
        $oeuvreSolo = $_GET['id'];
        $oeuvre = $oeuvres[$oeuvreSolo];
    }
    ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <?php echo $oeuvre['image']; ?>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['auteur'] ?></p>
            <p class="description-complete">
                <?php echo $oeuvre['description']; ?>
            </p>
        </div>
    </article>
</main>
<?php include_once('footer.php'); ?>
</body>
</html>
