<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Agence TLV Paris ToutesLocationsVoiture</title>
        <meta name="description" content="Location de voiture 24h/24 7J/7">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
        <link rel="stylesheet" href="css/main.css">
    </head>
        <div class="container">
            <h1>Upload en PHP</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <button class="btn btn-primary">Upload</button>
            </form>
            <?php
            var_dump($_FILES);
            // On vérifie que le fichier a bien été uploadé
            if (!empty($_FILES['image'])) {
                // On récupère le fichier temporaire.
                $tmpFile = $_FILES['image']['tmp_name'];
                // On récupère le nom du fichier
                $fileName = $_FILES['image']['name'];
                // Générer un nom de fichier unique :
                // chaton.jpg -> a3efz3g_chaton.jpg
                $fileName = substr(md5(time()), 0, 8) . '_' . $fileName;
                // On déplace le fichier à l'endroit désiré
                move_uploaded_file($tmpFile, __DIR__.'/upload/'.$fileName);
            }
           
            ?>
        </div>

    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>