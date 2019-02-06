<?php

/**
 * Les boucles
 * 
 * Présentation des boucles en PHP
 */
echo '<h1> Les Boucles : </h1>';
echo '<h2> Le For : </h2>';

 //for

for ($i = 0 ; $i < 10; $i++); {
echo $i .'</br>';
};

echo '<h2> Le Foreach : </h2>';

 //foreach

$students =['Mickael', 'Baptiste', 'Gregory', 'Thomas'];
foreach ($students as /*$kiwi =>*/ $firstName) {
    echo /*$kiwi . ' : ' . */ $firstName .'</br>';
};

echo '<h2> Le While : </h2>';

// while

$j = 0;
while ($j < 10) {
    $j++;  
    echo $j."<br/>";
};

/* ou */

$k = 0;
while ($k++ < 10) {
    echo 'a';
}

echo '<h2> Le Do While : </h2>';
 // do ... while


$l = 10;
do {
    echo $l++;
} while ($l < 10);