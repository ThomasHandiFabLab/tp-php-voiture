<?php

// Les superglobales
// On peut accéder aux données dans l'URL grâce à $_GET
// Par exemple "?user=toto&page=user"
var_dump($_GET);

// On vérifie que le paramètre q existe dans l'URL
If (!empty($_GET['q'])) {

}


// Traitement d'un formulaire 
var_dump($_POST);
?>

<form action="" method="post">
    <input type="text" name="message">
    <button>Envoyer</button>
</form>