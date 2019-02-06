<?php
$var1 = 15;
$var2 = 5;
$var3 = 8;
$result1 = $var1+$var2+$var3;
$result3 = ($var3-$var2)/$var1;

echo $var1. " + " .$var2. " + " .$var3. " = " .$result1. " | "  ."</br>";

echo $var1. " X (" .$var2. " - " .$var3. ") = " .$result2= $var1*($var2-$var3). " | " ."</br>";

echo "(" .$var3. " - " .$var2. ") / " .$var1. " = " .$result3. " | " ."</br>";

if ($result1 < 20 || $result2 < 20 || $result3 < 20);

echo "Une des opération renvoie moins de 20 !";

// echo '<h1>Tu as ' .$age. ' ans.<h1>';

// CORRECTION
/*
$var1 = 15;
$var2 = 5;
$var3 = 8;
$result1 = $var1+$var2+$var3;
$result3 = 'Division par 0 impossible';

// Si le nombre est différent de 0, on peut faire le calcul
if ($var1 !== 0) {
    $result3 = ($var3 - $var2) / $var1;
};

echo $var1. " + " .$var2. " + " .$var3. " = " .$result1. " | "  ."</br>";

echo $var1. " X (" .$var2. " - " .$var3. ") = " .$result2= $var1*($var2-$var3). " | " ."</br>";

echo "(" .$var3. " - " .$var2. ") / " .$var1. " = " .$result3. " | " ."</br>";

if ($result1 < 20 || $result2 < 20 || $result3 < 20);

echo "Une des opération renvoie moins de 20 !";

// echo '<h1>Tu as ' .$age. ' ans.<h1>';*/