<?php

// Déclarer une fonction hello
function hello($name = 'world') {
    return 'Hello '.$name.'!';
}

// Appeller une fonction
echo hello(); // Affiche "Hello world!"
echo hello('Matthieu'); // Affiche "Hello Matthieu!"
