<?php

$firestName = 'Thomas';

echo '<h1>Bonjour ' .$prenom. ' !</h1>';
// Interpolation de variable possible avec les doubles quotes
echo "<h1>Bonjour $firestName</h1>";

$tableau = [1, 2, 4]; 
print_r ($tableau); // Affiche le contenu du tableau non formaté
die ('Stop le script'); // Arrête le script avec un message ou pas
var_dump($tableau); // Affiche le contenu du tableau formaté
