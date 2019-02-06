<?php
$j = 11;
while ($j > 1) {
    $j--;  
    echo $j. ' ';
};


echo '<br/>';


$j = 0;
while ($j < 100) {
    $j++;
    $j++;  
    echo $j. ' ';
};


echo '<br/>';


$number1 = 15000;
$number2 = 30000;
$PGCD = 1;

if ($number1 > $number2) {
    while ($PGCD < $number1-$number2) {  
        $PGCD = $number1-$number2;
        echo $PGCD. ' ';
    };
} elseif ($number2 < $number1) {
    while ($PGCD < $number2-$number1) {  
        $PGCD = $number2-$number1;
        echo $PGCD. ' ';
    };
} else {
    echo $number1;
}

// Correction

echo '<br/>';

$FizzBuz = 0;
while ($FizzBuz < 100) {
    $FizzBuz++;  
    if ($FizzBuz % 15==0){
        echo '<p>FizzBuzz</p>';
    } elseif ($FizzBuz % 5==0) {
        echo '<p>Buzz</p>';
    } elseif ($FizzBuz % 3==0) {
        echo '<p>Fizz</p>';
    } else {
        echo $FizzBuz . ', ';
    }

};

