<?php 
//Wrong answer 100%

$n = (int) readline();

if ($n > 0 && $n <= 50){
$phi = (1 + sqrt(5)) / 2;
$psi = (1 - sqrt(5)) / 2;

$fibonacci = (pow($phi, $n) - pow($psi, $n)) / sqrt(5);
 

echo number_format($fibonacci, 1).PHP_EOL;
}

?>