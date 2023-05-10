
<?php

while (true) {
    $n = intval(fgets(STDIN));
    if ($n == 0) break;

    $camisetas = [];
    for ($i = 0; $i < $n; $i++) {
        $nome = trim(fgets(STDIN));
        list($cor, $tamanho) = explode(' ', trim(fgets(STDIN)));
        $camisetas[] = [$nome, $cor, $tamanho];
    }

    usort($camisetas, function($a, $b) {
        if ($a[1] == $b[1]) {
            if ($a[2] == $b[2]) {
                return strcmp($a[0], $b[0]);
            } else {
                return $b[2] <=> $a[2];
            }
        } else {
            return strcmp($a[1], $b[1]);
        }
    });

    foreach ($camisetas as $c) {
        echo "{$c[1]} {$c[2]} {$c[0]}\n";
    }
    echo "\n";
}

?>