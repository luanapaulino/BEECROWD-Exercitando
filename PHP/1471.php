<?php 
//Presentation error 100%
while (true) {
  $entrada = fgets(STDIN);
  if ($entrada == false) break;
  
  list($n, $r) = explode(" ", trim($entrada));
  $n = (int)$n;
  $r = (int)$r;

  $retornados = explode(" ", fgets(STDIN));

  $todos = range(1, $n);

  // Remove os mergulhadores que retornaram do mergulho
  for ($i = 0; $i < $r; $i++) {
      $indice = array_search((int) $retornados[$i], $todos);
      if ($indice !== false) {
          unset($todos[$indice]);
      }
  }

  if (count($todos) == 0) {
      echo "*".PHP_EOL;
  } else {
      echo implode(" ", $todos).PHP_EOL;
  }
}

?>



