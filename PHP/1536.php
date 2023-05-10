<?php
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $placar1 = trim(fgets(STDIN));
    $placar2 = trim(fgets(STDIN));
    preg_match('/(\d+) x (\d+)/', $placar1, $matches1);
    preg_match('/(\d+) x (\d+)/', $placar2, $matches2);
    $m1 = intval($matches1[1]);
    $v1 = intval($matches1[2]);
    $m2 = intval($matches2[1]);
    $v2 = intval($matches2[2]);
    $p1 = ($m1 + $m2 > $v1 + $v2) ? 3 : (($m1 + $m2 == $v1 + $v2 && $v2 > $m2) ? 1 : 0);
    $p2 = ($m1 + $m2 < $v1 + $v2) ? 3 : (($m1 + $m2 == $v1 + $v2 && $m2 > $v2) ? 1 : 0);
    echo ($p1 > $p2) ? "Time 1\n" : (($p1 < $p2) ? "Time 2\n" : "Penaltis\n");
}
?>