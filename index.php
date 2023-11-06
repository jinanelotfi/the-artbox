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
    <?php include_once('header.php'); ?>    
    <main>
        <?php include_once('oeuvres.php'); ?>
        <div id="liste-oeuvres">
           <!-- ici commence la boucle -->
           <?php foreach ($oeuvres as $oeuvre => $id) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre; ?>">
                    <?php echo $id['image']; ?>
                    <h2><?php echo $id['titre']; ?></h2>
                    <p class="description"><?php echo $id['auteur']; ?></p>
                </a>
            </article>
            <?php endforeach; ?>
            <!-- ici termine la boucle -->            
        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>