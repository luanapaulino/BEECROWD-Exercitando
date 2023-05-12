<?php 
//ACCEPTED

$n = intval(readline());
$freq = array();

for ($i = 0; $i < $n; $i++){
  $num = intval(readline());
  if (array_key_exists($num, $freq)) {
    $freq[$num] += 1;
  } else {
    $freq[$num] = 1;
  }
}

ksort($freq);

foreach ($freq as $num => $count) {
  echo "$num aparece $count vez(es)".PHP_EOL;
}

?>