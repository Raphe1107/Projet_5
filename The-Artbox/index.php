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
        <?php include_once "oeuvres.php";?>
    
        
        <div id="liste-oeuvres">
            <?php 
              foreach($oeuvres as $oeuvre);  {
                $image = $oeuvre['image'];
                $titre = $oeuvre['titre'];
                $description = $oeuvre['description'];
                $id = $oeuvre['id'];
            ?>
            
            <article class="oeuvre">
                <a href="oeuvre.php">
                    <?php echo $image ?>
                    <h2><?php echo $titre ?></h2> 
                    <p class=description><?php echo $description ?></p>
                </a>
            </article>
            <?php
              }

            ?>
            
            
        </div>
    </main>

    <?php include_once "footer.php" ?>
    
    
</body>
</html>
