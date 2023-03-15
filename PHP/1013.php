<?php 

$values = readline();
$values = explode(" ", $values);
$maior = -99999999;

for($x = 0; $x < count($values); $x++){
    if($maior < $values[$x]){
        $maior = $values[$x];
    }
}

echo "$maior eh o maior\n";

?>