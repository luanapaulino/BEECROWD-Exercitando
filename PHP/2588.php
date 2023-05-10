
<?php
//while entra em loop e atribui o valor a variável $seq
while ($seq = fgets(STDIN)) {
  //matriz $freq c 26 letras do alfabeto preechido com zero
  $freq = array_fill(0, 26, 0);
  $len = strlen($seq) - 1;
  for ($i = 0; $i < $len; $i++) {
    //usando a funçao ele subtrai ocaractere 'a'para ter o valor da matriz 
    $freq[ord($seq[$i]) - ord('a')]++;
  }
  $odd_count = 0;
  for ($i = 0; $i < 26; $i++) {
    if ($freq[$i] % 2 != 0) {
      $odd_count++;
    }
  }
  if ($odd_count == 0) {
    echo "0\n";
  } else {
    echo ($odd_count - 1) . "\n";
  }
}
?>