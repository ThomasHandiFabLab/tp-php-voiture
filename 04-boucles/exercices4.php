<?php
$s = date('s'); // Renvoie au 00, 01 ou 54
echo date('l d F Y');
echo ', il est ';
echo date ('H\hi \e\t ');
echo $s . ' seconde';
echo ($s > 1) ? 's' : '';





echo "</br>"; 
echo "</br>"; 
echo "</br>"; 






$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

//      1
echo "</br>";
// Exemple pour parcourir un tableau
foreach ($eleves as $eleve) {
    echo $eleve['nom'];
    echo " a eu ";
    foreach ($eleve['notes'] as $indexquipeutsappelercommeonveut => $note) {
        $separator = ', ';

        // Si la  note est la dernière
        if ($indexquipeutsappelercommeonveut == count($eleve['notes']) - 1) {
            $separator = '.';
        // Si la note est l'avant dernière
        } else if ($indexquipeutsappelercommeonveut == count($eleve['notes']) - 2) {
            $separator = ' et ';
        }

        echo $note . $separator;
    };
    echo "</br>"; 
    echo "</br>"; 
};
// echo count($eleve['notes']);

//     2
$somme=0;
foreach ($eleves[2]['notes'] as $note) {
    $somme+=$note;
};
$moyenne=$somme / count($eleve['notes']);
echo 'La moyenne de Jean est de     ' . round($moyenne, 2) . '.';
//echo count($eleve['notes']);


echo "</br>"; 
echo "</br>"; 
echo "</br>"; 

//     3

$moyenne=0;
$somme=0;
$j=0;
while ($j < count($eleves)) {
    foreach ($eleves[$j]['notes'] as $note) {
        $somme=$note+$somme;
    };
    $moyenne=$somme / count($eleves[$j]['notes']);
    echo 'La moyenne de ' .$eleves[$j]['nom'] . ' est de ' . round($moyenne, 2) . '.';
    // var_dump($somme);
  
    echo '<br/>';
    $j++;
};

/*

$o=0;
while ($o <10) {
    
    echo '</br>';
    $p = $o;
    while ($p < 10) {
        $p++;  
        echo "⭐";
    };
    $o++;
    
};



*/

echo "</br>"; 
echo "</br>"; 
echo "</br>";
print_r($eleves[0]['notes']);


/*  */