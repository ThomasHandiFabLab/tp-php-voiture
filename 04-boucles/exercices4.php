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
echo "</br>";
// Exemple pour parcourir un tableau
foreach ($eleves as $eleve) {
    echo $eleve['nom'];
    echo " a eu ";
    foreach ($eleve['notes'] as $note) {
        echo $note . ', ';
        echo $str =strlen();
    };
    echo "</br>"; 
    echo "</br>"; 
};







echo "</br>"; 
echo "</br>"; 
echo "</br>";
print_r($eleves[0]['notes']);


/*  */