<?php
$age = 19;
if ($age > 17){
echo "Vous pouvez entrer";
} elseif (15 < $age/* && $age < 18*/){
    echo "Vous êtes presque majeur.";
} elseif (13 < $age /*&& $age < 16*/y) {
    echo "Vous êtes trop jeune.";
} else {
    echo "Vous êtes bien trop jeune.";
}
