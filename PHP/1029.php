<?php
// Função que retorna o n-ésimo número de Fibonacci e o número de chamadas recursivas feitas
function fib($n) {
    // Casos base
    if ($n == 0) {
        return array(0, 0);
    } elseif ($n == 1) {
        return array(1, 0);
    } else {
        // Chama a função recursivamente para n-1 e n-2 e soma os números e as chamadas recursivas
        list($fib_n1, $calls_n1) = fib($n-1);
        list($fib_n2, $calls_n2) = fib($n-2);
        $fib_n = $fib_n1 + $fib_n2;
        $calls_n = $calls_n1 + $calls_n2 + 1; // +1 por causa da chamada atual
        return array($fib_n, $calls_n);
    }
}

// Lê o número de casos de teste
$num_test_cases = intval(fgets(STDIN));

// Para cada caso de teste, lê o valor de X e calcula o n-ésimo número de Fibonacci e o número de chamadas recursivas feitas
for ($i = 0; $i < $num_test_cases; $i++) {
    $x = intval(fgets(STDIN));
    list($fib_x, $calls_x) = fib($x);
    // Imprime o resultado formatado
    echo "fib($x) = $calls_x calls = $fib_x\n";
}
?>
