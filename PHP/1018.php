<?php 

$n = 576;
$notas = [100,50,20,10,5,2,1];

echo "$n"."</br>";

foreach ($notas as $nota){
    $quant = $n / $nota;
    $n = $n % $nota;
    $nota =  number_format($nota, 2, ",","");
    echo intval($quant)."  nota(s) de R$ $nota ". "<br/>";
}

?>