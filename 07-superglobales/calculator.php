<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Agence TLV Paris ToutesLocationsVoiture</title>
    <meta name="description" content="Location de voiture 24h/24 7J/7">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Champ nombre 1</label>
                <input type="text" name="nombre1" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="nombre 2">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Champ nombre 2</label>
                <input type="text" name="nombre2" class="form-control" id="exampleInputPassword1"
                    placeholder="nombre 2">
            </div>
            <input class="form-check-input" type="radio" name="operator" id="exampleRadios1" value="+" checked>
            <label class="form-check-label" for="exampleRadios1">
                +
            </label>


            <input class="form-check-input" type="radio" name="operator" id="exampleRadios2" value="-">
            <label class="form-check-label" for="exampleRadios2">
                -
            </label>


            <input class="form-check-input" type="radio" name="operator" id="exampleRadios2" value="*">
            <label class="form-check-label" for="exampleRadios2">
                *
            </label>


            <input class="form-check-input" type="radio" name="operator" id="exampleRadios2" value="/">
            <label class="form-check-label" for="exampleRadios2">
                /
            </label>
            <?php if (isset($result)) : ?>
            <input type="text" class="form-control" disabled value="<?php echo $result; ?>">
            <?php endif; ?>
            
            <button type="submit" class="btn btn-primary">Calculer</button>
            </form>

    </div>


    <style>
    body {
        background: black;
        color: white;
    }
    </style>




    <?php
$datanbr=$_POST;
var_dump($_POST);
if (!empty($_POST)) {
  // On récupére les données du formulaire
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$operator = $_POST['operator'];

// On fait le bon calcul en fonction de l'opérateur coisi
if ($operator == '+') {
  $result = $nombre1 + $nombre2;
} else if ($operator == '-') {
  $result = $nombre1 - $nombre2;
} else if ($operator == '*') {
  $result = $nombre1 * $nombre2;
} else if ($operator == '/') {
  $result = $nombre1 / $nombre2;
}

}
echo $result;




?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>