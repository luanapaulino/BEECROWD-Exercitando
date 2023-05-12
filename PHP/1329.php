<?php 
//ACCEPTED
while (true) {
  $n = (int) fgets(STDIN);
  if ($n == 0) break;

  $resultados = explode(" ", fgets(STDIN));
  $jogador1 = 0;
  $jogador2 = 0;

  foreach ($resultados as $resultado) {
      if ($resultado == 0) {
          $jogador1++;
      } else {
          $jogador2++;
      }
  }

  echo "Mary won $jogador1 times and John won $jogador2 times\n";
}
?>