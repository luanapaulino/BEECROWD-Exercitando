<?php 
  
  while (($n = fgets(STDIN)) !== false){
    $m = str_split(readline());
    
    $soma = array_sum($m);

    if($soma % 3 == 0) {
      echo "$soma sim".PHP_EOL;
    } else {
      echo "$soma não".PHP_EOL;
    }

  }
  
?>