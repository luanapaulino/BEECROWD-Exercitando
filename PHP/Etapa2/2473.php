<?php
//Accepted
$aposta = readline();
$numerosAposta = explode(" ", $aposta);

$sorteio = readline();
$numerosSorteados = explode(" ", $sorteio);

$numeros_corretos = 0;

foreach ($numerosAposta as $numero) {
  if (in_array($numero, $numerosSorteados)) {
    $numeros_corretos++;
  }
}

switch ($numeros_corretos) {
  case 3:
    echo "terno";
    break;
  case 4:
    echo "quadra";
    break;
  case 5:
    echo "quina";
    break;
  case 6:
    echo "sena";
    break;
  default:
    echo "azar";
    break;
}

