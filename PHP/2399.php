<?php

$n = intval(trim(fgets(STDIN)));

$matriz = array();

// Lendo a matriz de entrada
for ($i = 0; $i < $n; $i++) {
    $matriz[] = explode(" ", trim(fgets(STDIN)));
}

// Inicializando a matriz de saída
$saida = array();
for ($i = 0; $i < $n; $i++) {
    $linha = array();
    for ($j = 0; $j < $n; $j++) {
        $linha[] = 0;
    }
    $saida[] = $linha;
}

// Calculando a matriz de saída
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($matriz[$i][$j] == 1) { // Verifica se há uma moeda na posição atual
            for ($k = $j + 1; $k < $n; $k++) { // Conta as moedas à direita
                if ($matriz[$i][$k] == 1) {
                    $saida[$i][$j]++;
                }
            }
            for ($k = $j - 1; $k >= 0; $k--) { // Conta as moedas à esquerda
                if ($matriz[$i][$k] == 1) {
                    $saida[$i][$j]++;
                }
            }
            for ($k = $i + 1; $k < $n; $k++) { // Conta as moedas abaixo
                if ($matriz[$k][$j] == 1) {
                    $saida[$i][$j]++;
                }
            }
            for ($k = $i - 1; $k >= 0; $k--) { // Conta as moedas acima
                if ($matriz[$k][$j] == 1) {
                    $saida[$i][$j]++;
                }
            }
        }
    }
}

// Imprimindo a matriz de saída
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $saida[$i][$j] . "\n";
    }
}

?>