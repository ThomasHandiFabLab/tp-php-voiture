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
td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}

td {
    text-align: center;
}

tr:nth-child(even) {
    background-color: #eee;
}

th[scope="col"] {
    background-color: #696969;
    color: #fff;
}

th[scope="row"] {
    background-color: #d7d9f2;
}

table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
}
</style>


<?php   
echo "<table>";
$n=-1;
while ($n <10) {
    $n++;
    echo '</br>';
    $m =-1;
    $o =0;
   echo '<tr>';
    while ($m < 10) {
        $m++;  
        $o=$m*$n;
        echo '<th>'.$o.'</th>';
    };
   echo '</tr>';
};
echo "</table>";


/*<table>
    <caption>Alien football stars</caption>
    <tr>
        <th scope="col">Player</th>
        <th scope="col">Gloobles</th>
        <th scope="col">Za'taak</th>
    </tr>*/

echo "<table>";
$k = 0;
for ($i = 0; $i <= 10; $i++)
{
    echo '<br>';
    echo '<tr>';
    for ($j = 0; $j <= 10; $j++)
    {   $k=$i*$j;
        echo '<td>'.$k.'</td>';
    }
    echo '</tr>';
}
echo "</table>";
?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

/* correction 
<?php
/*
 * Afficher les tables de multiplication de 0 à 10
 */
for ($table = 1; $table <= 10; $table++) {
    echo 'Table de ' . $table . ' : <br />';
    for ($j = 1; $j <= 10; $j++) {
        echo "$table x $j = ".($table * $j).'<br />';
    }
    echo '================ <br />';
}
/**
 * Carré de table de multiplication
 */
echo PHP_EOL; // Equivaut à un retour chariot
echo '<table align="center" border="1" style="border-collapse: collapse">'.PHP_EOL;
// Légende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width: 20px; background-color: lightgrey">x</td>';
for ($z = 0; $z <= 20; $z++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    /* // Le code ci-dessus est un ternaire, il est
    // équivalent au code suivant :
    if ($z % 2) {
        // Pair
        $color = 'lightgrey';
    } else {
        // Pas pair
        $color = 'white';
    } */
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$z.'</td>';
}
echo '</tr></thead>';
for ($i = 0; $i <= 20; $i++) {
    $color = ($i % 2) ? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1 : 0; // Sens du background color
    echo "\t<tr>"; // "\t" génére une tabulation
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i.'</td>';
    for ($j = 0; $j <= 20; $j++) {
        $color = ($j % 2 === $direction) ? 'lightgrey' : 'white';
        $color = ($i === $j) ? 'grey' : $color; // Gris foncé sur le carré
        echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i * $j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

<!-- <table>
    <tr>
        <td>x</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>1</td>
    </tr>
</table> --> 

*/