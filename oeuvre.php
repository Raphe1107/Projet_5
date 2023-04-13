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

            // On vérifie que l'ID est défini dans l'URL
            if  (isset($_GET['id'])) {

                // On verifie si L'ID est numérique ou est vide 
                if (!is_numeric($_GET['id']) || empty($_GET['id'])) {
                    die("L'ID spécifié n'est pas valide.");
                }

                // On recherche l'oeuvre avec l'ID correspondant   
                foreach ($oeuvres as $oeuvre) {
                    $image = $oeuvre['image'];
                    $titre = $oeuvre['titre'];
                    $description = $oeuvre['description'];
                    $descriptioncomplete = $oeuvre['description-complete'];
                
                    if ($oeuvre['id'] === $_GET['id']){ ?>
                        <article id="detail-oeuvre">
                            <div id="img-oeuvre">
                                <?php echo $image ?>
                            </div>
                            <div id="contenu-oeuvre">
                                <h1> <?php echo $titre ?> </h1>
                                <p class="description"> <?php echo $description ?> </p>
                                <p class="description-complete"> <?php echo $descriptioncomplete ?> </p>
                            </div>
                        </article> <?php
                        break;
                    }
                } 
                
                // Si l'ID de l'URL ne correspond à aucune oeuvre on affiche un message
                if ($oeuvre['id'] != $_GET['id']) {
                    echo "L'oeuvre que vous cherchez n'existe pas.";              
                }

            } else {
                echo "ID non indiqué";
            }
        ?>     
    </main>

    <?php include_once "footer.php"; ?> 
</body>
</html>