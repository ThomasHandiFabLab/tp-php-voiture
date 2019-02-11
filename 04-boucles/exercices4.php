<?php
$s = date('s'); // Renvoie au 00, 01 ou 54
echo date('l d F Y');
echo ', il est ';
echo date ('H\hi \e\t ');
echo $s . ' seconde';
echo ($s > 1) ? 's' : '';