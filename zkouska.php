<?php
$cislojedna = 1;
$cislodva = 2;
function secti($cislojedna , $cislodva) {
    return $cislojedna + $cislodva;
}
$vystup = secti($cislojedna , $cislodva);
echo $vystup . ", ";
function vydel($cislojedna , $cislodva) {
    $vysledek = $cislojedna / $cislodva;
    return $vysledek;
}
$vystup2 = vydel($cislojedna , $cislodva);
echo $vystup2;
