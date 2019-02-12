<?php
// 1 Créer une fonction calculant le carré d'un nombre.

function square($cote) {
    return $cote*$cote;
}
echo square(5); // 25

echo "<br/>";
// 2 Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle.
echo "<br/>";

function aireRectangle($Lrectangle, $lrectangle)  {
    return $Lrectangle*$lrectangle;
};
echo aireRectangle(10, 5); //50

echo "<br/>";

function aireCercle($RCercle) {
    return round($RCercle*$RCercle*M_PI, 2);
};
echo aireCercle(10); // 314,15

echo "<br/>";





// 3 Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.
echo "<br/>";

function convertirHTversTTC($price, $rate) {
    
    return round($price * (1 + $rate / 100));
}
echo convertirHTversTTC(10, 20); // 10 euros HT -> 12 euros TTC

echo "<br/>";



// 4 Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT).
echo "<br/>";

function convertirHTversTTC2($HT2, $TTC2, $direction) {

    if ($direction = true) {
    return convertirHTversTTC($HT2, $TTC2);
    } 
    
    else {
    $HT2=$TTC2/1.2;
    return round($HT2, 2); 
    };

};
echo convertirHTversTTC2(10, 20, false); // 12 euros TTC -> 12 euros HT