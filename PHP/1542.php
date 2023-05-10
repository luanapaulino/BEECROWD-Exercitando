<?php
while (true) {
    $input = explode(' ', fgets(STDIN));
    $q = (int)$input[0];
    $d = (int)$input[1];
    $p = (int)$input[2];
    if ($q == 0 && $d == 0 && $p == 0) break;
    $total_paginas = ($d * $q) / (1 - $q / $p);
    if ($total_paginas == 1) {
        echo "1 pagina\n";
    } else {
        echo floor($total_paginas) . " paginas\n";
    }
}
?>