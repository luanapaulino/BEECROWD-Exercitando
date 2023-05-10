<?php
$teste = 1;

while (true) {
    $input = explode(' ', trim(fgets(STDIN)));
    if (count($input) < 2) {
        continue;
    }
    list($linhas, $colunas) = $input;
    if ($linhas == 0 && $colunas == 0) {
        break;
    }

    $tv = array();

    for ($i = 0; $i < $linhas; $i++) {
        $tv[] = explode(' ', trim(fgets(STDIN)));
    }

    while (true) {
        $input = explode(' ', trim(fgets(STDIN)));
        if (count($input) != 2) {
            continue;
        }
        list($x, $y) = $input;
        if ($x == 0 && $y == 0) {
            break;
        }

        if ($x > 0) {
            for ($i = 0; $i < $x; $i++) {
                for ($j = 0; $j < $linhas; $j++) {
                    array_unshift($tv[$j], array_pop($tv[$j]));
                }
            }
        } elseif ($x < 0) {
            for ($i = 0; $i < abs($x); $i++) {
                for ($j = 0; $j < $linhas; $j++) {
                    array_push($tv[$j]) & ($tv[$j][0]);
                    array_shift($tv[$j]);
                }
            }
        }

        if ($y > 0) {
            for ($i = 0; $i < $y; $i++) {
                array_push($tv) & ($tv[0]);
                array_shift($tv);
            }
        } elseif ($y < 0) {
            for ($i = 0; $i < abs($y); $i++) {
                array_push($tv) & ($tv[$linhas-1]);
                array_pop($tv);
            }
        }
    }

    echo "Teste $teste\n";

    for ($i = 0; $i < $linhas; $i++) {
        echo implode(' ', $tv[$i]) . "\n";
    }

    $teste++;
    echo "\n";
}
?> 