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


    <?php include_once "header.php"; ?>

    <main>
        <?php include_once "oeuvres.php"; ?>

        <?php 
            // On vérifie que l'ID est défini
            if  (isset($_GET['id'])) {

                // On recherche l'oeuvre avec l'ID correspondant   
                foreach ($oeuvres as $oeuvre) {
                    if ($oeuvre['id'] == $_GET['id']){
                        $image = $oeuvre['image'];
                        $titre = $oeuvre['titre'];
                        $description = $oeuvre['description'];
                        $descriptioncomplete = $oeuvre['description-complete'];
                        break;
                    }
                }
                // Si aucun ID ne correspond à une oeuvre, on affiche une erreur
                if (($oeuvre['id'] != $_GET['id'])) {
                    die("L'œuvre que vous cherchez n'existe pas.");
                }
            }
        ?>
             
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <?php echo $image ?>
            </div>
            <div id="contenu-oeuvre">
                <h1> <?php echo $titre ?> </h1>
                <p class="description"> <?php echo $description ?> </p>
                <p class="description-complete"> <?php echo $descriptioncomplete ?> </p>
            </div>
        </article>
    </main>

    <?php include_once "footer.php"; ?> 
</body>
</html>