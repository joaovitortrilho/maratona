<?php
//fatorial
$n = 5;
$fatorial = 1;
for ($i = $n; $i >= 1; $i--) {
    $fatorial *= $i;
}
echo "Fatorial de $n é: $fatorial\n";
?>

<?php  
//fibonaccio
$termos = 10;
$a = 0;
$b = 1;
echo "Fibonacci: $a $b ";
for ($i = 3; $i <= $termos; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}
echo "\n"
?>

<?php   
 
//baskaras
$a = 1; $b = -3; $c = 2;
$delta = ($b ** 2) - (4 * $a * $c);
if ($delta < 0) {
    echo "Não possui raízes reais.\n";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "x1 = $x1 | x2 = $x2\n";
}
?>
<?php
//NuMEROS PRIMOS

$num = 17;
$primo = true;
if ($num <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
}
echo $primo ? "$num é primo.\n" : "$num não é primo.\n";


// MÁXIMO DIVISOR COMUM 
$num1 = 48; $num2 = 18;
$x = $num1; $y = $num2;
while ($y != 0) {
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}
echo "MDC de $num1 e $num2 é: $x\n";

//ORDENAÇÃO BUBBLE SORT\n";
$vetor = [64, 34, 25, 12, 22, 11, 90];
$tam = count($vetor);
for ($i = 0; $i < $tam - 1; $i++) {
    for ($j = 0; $j < $tam - $i - 1; $j++) {
        if ($vetor[$j] > $vetor[$j + 1]) {
            $temp = $vetor[$j];
            $vetor[$j] = $vetor[$j + 1];
            $vetor[$j + 1] = $temp;
        }
    }
}
echo "Vetor ordenado: " . implode(", ", $vetor) . "\n";


//BUSCA EM VETOR
$vetorBusca = [10, 20, 30, 40, 50];
$alvo = 30;
$encontrado = false;
foreach ($vetorBusca as $indice => $valor) {
    if ($valor == $alvo) {
        echo "Elemento $alvo encontrado na posição $indice.\n";
        $encontrado = true;
        break;
    }
}
if (!$encontrado) echo "Elemento não encontrado.\n";


// SOMA E MÉDIA DE VETOR
$notas = [8.5, 7.0, 9.5, 6.0];
$somaNotas = array_sum($notas);
$media = $somaNotas / count($notas);
echo "Soma: $somaNotas | Média: $media\n";

//CONVERSÃO CELSIUS-FAHRENHEIT
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius°C equivale a $fahrenheit°F\n";


//CONVERSÃO DECIMAL-BINÁRIO
$decimal = 25;
echo "Decimal $decimal em Binário é: " . decbin($decimal) . "\n";


//TABUADA INVERSA
$n = 7;
echo "Tabuada Inversa do $n:\n";
for ($i = 10; $i >= 1; $i--) {
    echo "$n x $i = " . ($n * $i) . "\n";
}


//CONTAGEM REGRESSIVA
for ($i = 10; $i >= 1; $i--) {
    echo "$i ";
}
echo "\nFim!\n";


//SOMA DOS PARES (1 A 100)
$somaPares = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $somaPares += $i;
    }
}
echo "Soma dos pares de 1 a 100: $somaPares\n";


//NÚMEROS ÍMPARES (1 A 100)
echo "Ímpares: ";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "\n";

echo "\n========================================\n";
echo "16. MÚLTIPLOS DE 3 (1 A 100)\n";
echo "========================================\n";
echo "Múltiplos de 3: ";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo "$i ";
    }
}
echo "\n";

echo "\n========================================\n";
echo "17. INVERTER STRING\n";
echo "========================================\n";
$texto = "Desenvolvimento";
echo "Original: $texto | Invertido: " . strrev($texto) . "\n";

echo "\n========================================\n";
echo "18. CONTAR VOGAIS\n";
echo "========================================\n";
$palavra = "Programacao";
$palavraLower = strtolower($palavra);
$qtdVogais = 0;
$vogais = ['a', 'e', 'i', 'o', 'u'];
for ($i = 0; $i < strlen($palavraLower); $i++) {
    if (in_array($palavraLower[$i], $vogais)) {
        $qtdVogais++;
    }
}
echo "A palavra '$palavra' tem $qtdVogais vogais.\n";

echo "\n========================================\n";
echo "19. MAIOR DE 3 NÚMEROS\n";
echo "========================================\n";
$numA = 15; $numB = 27; $numC = 12;
if ($numA >= $numB && $numA >= $numC) {
    $maior = $numA;
} elseif ($numB >= $numA && $numB >= $numC) {
    $maior = $numB;
} else {
    $maior = $numC;
}
echo "O maior entre $numA, $numB e $numC é: $maior\n";

echo "\n========================================\n";
echo "20. PALÍNDROMO\n";
echo "========================================\n";
$palavraPalindromo = "Arara";
$limpa = strtolower(str_replace(' ', '', $palavraPalindromo));
if ($limpa == strrev($limpa)) {
    echo "A palavra '$palavraPalindromo' é um palíndromo.\n";
} else {
    echo "A palavra '$palavraPalindromo' NÃO é um palíndromo.\n";
}

?>