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
    

    <style>
    body {
        background: black;
        color: white;
    }
    </style>

<form method="POST" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Sujet</label>
    <input type="sujet" name="sujet" class="form-control"id="exampleFormControlInput1" placeholder="Votre sujet">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Message</label>
    <textarea type="message" name="message" multiple class="form-control" id="exampleFormControlSelect2" placeholder="Votre sujet" cols="30" rows="10"></textarea>
  </div>
  <button>Envoyer</button>
  </form>

  <?php
if (!empty($_POST)) {
$sujet = $_POST['sujet'];
$email = $_POST['email'];
$message = $_POST['message'];
$isvalid = true;

if (strlen($message) <= 15) {
  $isvalid = false;
  echo 'Votre message ne doit pas faire moins de 15 caractères';
}
echo "<br/>";
if (strlen($sujet) == 0) {
  $isvalid = false;
  echo 'Votre sujet ne doit pas être vide';
}
echo "<br/>";
if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $isvalid = false;g
  echo 'Cet email n\'est pas valide';
}
if ($isvalid) {
  echo 'Envoi du mail';
}
}
/*if (strlen($sujet) == 0) {
    exit('Votre nom ne doit pas être vide');
}





if (!ctype_digit($nombre1)) {
    exit('Le nombre1 n\'est pas un nombre valide');
}

if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Cet email n\'est pas valide');
}
*/

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

