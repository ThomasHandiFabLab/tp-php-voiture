<?php

// On inclus le fichier header.php sur la page
require_once __DIR__ . '/../partials/header.php';
/**
 * Ce fichier va nous permettre d'ajouter un film en base de données.
 * 
 * On affichera d'abord un formulaire correctement configuré pour faire de l'upload.
 * Le formulaire contiendra 5 champs :
 * - Le titre: champ de type text
 * - La date: champ de type date
 * - La description: champ textarea
 * - La jaquette: champ de type file
 * - La catégorie: champ select avec toutes les catégories de la BDD en option. Le value de l'option sera l'id de la catégorie. "<option value="1">Film de gangsters</option>"
 * 
 * Quand le formulaire sera soumis, on récupère tous les champs du formulaire en PHP. On les vérifie et s'ils sont corrects, on exécute la requête SQL pour insérer le film en BDD. Optionnellement, on pourra également faire l'upload de la jaquette.
 */ 
if (!empty($_POST)) { // Si le formulaire est soumis
    $isValid = true;

    if (empty($email)) { // Vérifie si l'email est vide
        $isValid = false;
        echo 'L\'email est vide. <br />';
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Vérifie si l'email est valide
        $isValid = false;
        echo 'L\'email n\'est pas valide. <br />';
    }

    if (empty($subject)) {
        $isValid = false;
        echo 'Le sujet ne doit pas être vide. <br />';
    }

    if (strlen($message) < 15) {
        $isValid = false;
        echo 'Le message est trop court.';
    }

    if ($isValid) {
        echo 'Envoi du mail';
    }

}

}

?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group my-5">
            <label for="exampleInputTitre">Titre du film</label>
            <input type="title" class="form-control" id="exampleInputTitre" aria-describedby="emailHelp"
                placeholder="Exemple : Le Parrain">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="date" class="form-control" id="exampleInputdate" placeholder="01/01/2019">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <!-- Téléchargement d'un fichier -->
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Affiche du film</label>
                <input type="file" class="form-control-file" id="affichefilm">
            </div>
        </form>

        <!-- Catégorie du film -->

        <label for="exampleInputCategorie">Catégories</label>
        <?php 
        
        $query = $db->query('SELECT * FROM category');
        $categories = $query->fetchAll();

        foreach ($categories as $category) { ?>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="Radios<?php $category['name'] ?>"
                id="exampleRadios<?php $category['id'] ?>" value="<?php $category['id'] ?>" checked>
            <label class="form-check-label" for="exampleRadios1">
                <?php echo $category['name'] ?>
            </label>
        </div>
        <?php } ?>

        <button type="submit" class="btn btn-primary my-5">Submit</button>
    </form>
</div>