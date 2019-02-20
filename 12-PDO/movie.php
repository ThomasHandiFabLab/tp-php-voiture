<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'netflix2');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {
    $db = new PDO
        ('mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME.';charset=UTF8', 
        DB_USER, 
        DB_PASSWORD,
        // On active les erreyrs PDO
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
    );
} catch (Exception $e) {
    echo '<span style="color: red">'.$e->getMessage().'</span>';
    echo '<p>Qu\'est-ce que tu as foutu à la ligne '.$e->getTrace()[0]['line'].' ?</p>';
    echo '<img src="travolta.gif" />';
    // header('Location: https://www.google.fr/search?q='.$e->getMessage());
}

// Ecrire une requête qui récupère un film par son ID
// L'ID doit provenir de l'URL
// Exemple : Si je saisis movie.php?id=4, la requête doit récupérer le film avec l'Id 4
// Sur la page, on affichera le titre du film récupéré


if (!empty($_GET['id'])) { // Si l'id existe dans l'url
    $id = intval($_GET['id']); //
    $movieid = $db->query('SELECT * FROM movie WHERE id='.$id);
    $movie = $movieid->fetch();
}
if ($movie) {
    // On affiche le nom du film
    echo 'Vous avez cherché : '.$movie['name'] .' !';
} else {
    echo 'Désolé, ce film n\'existe pas.';
}
