<?php

echo "========================================\n";
echo "  RESOLUÇÃO DOS EXERCÍCIOS DE PHP\n";
echo "  Estruturas de Controle e Operadores\n";
echo "========================================\n\n";

// ============================================================
// Questão 1 — Verificação de maioridade
// ============================================================
echo "--- Questão 1: Verificação de maioridade ---\n";

$idade = 17;

if ($idade >= 18) {
    echo "Maior de idade\n";
} else {
    echo "Menor de idade\n";
}

echo "\n";

// ============================================================
// Questão 2 — Classificação de nota
// ============================================================
echo "--- Questão 2: Classificação de nota ---\n";

$nota = 7.5;

if ($nota >= 7) {
    echo "Aprovado (nota: $nota)\n";
} elseif ($nota >= 5) {
    echo "Recuperação (nota: $nota)\n";
} else {
    echo "Reprovado (nota: $nota)\n";
}

echo "\n";

// ============================================================
// Questão 3 — Operador ternário — par ou ímpar
// ============================================================
echo "--- Questão 3: Operador ternário — par ou ímpar ---\n";

$numero = 15;

$resultado = ($numero % 2 == 0) ? "Par" : "Ímpar";
echo "O número $numero é: $resultado\n";

echo "\n";

// ============================================================
// Questão 4 — Verificação de tipo com gettype()
// ============================================================
echo "--- Questão 4: Verificação de tipo com gettype() ---\n";

$x = 42;
$y = "Olá";
$z = true;

$tipoX = gettype($x);
$tipoY = gettype($y);
$tipoZ = gettype($z);

# tipoX
if ($tipoX == "integer") {
    echo "A variável \$x é do tipo integer\n";
} elseif ($tipoX == "string") {
    echo "A variável \$x é do tipo string\n";
} elseif ($tipoX == "boolean") {
    echo "A variável \$x é do tipo boolean\n";
}

# tipoY
if ($tipoY == "integer") {
    echo "A variável \$y é do tipo integer\n";
} elseif ($tipoY == "string") {
    echo "A variável \$y é do tipo string\n";
} elseif ($tipoY == "boolean") {
    echo "A variável \$y é do tipo boolean\n";
}

# tipoZ
if ($tipoZ == "integer") {
    echo "A variável \$z é do tipo integer\n";
} elseif($tipoZ == "string") {
    echo "A variável \$z é do tipo string\n";
} elseif ($tipoZ == "boolean") {
    echo "A variável \$z é do tipo boolean\n";
}

echo "\n";

# resolução sem if-else

$x = 42;
$y = "Olá";
$z = true;

echo "A variável \$x é do tipo " . gettype($x) . "\n";
echo "A variável \$y é do tipo " . gettype($y) . "\n";
echo "A variável \$z é do tipo " . gettype($z) . "\n";

// ============================================================
// Questão 5 — Dia da semana com switch
// ============================================================
echo "--- Questão 5: Dia da semana com switch ---\n";

$dia = 3;

switch ($dia) {
    case 1:
        echo "Segunda-feira\n";
        break;
    case 2:
        echo "Terça-feira\n";
        break;
    case 3:
        echo "Quarta-feira\n";
        break;
    case 4:
        echo "Quinta-feira\n";
        break;
    case 5:
        echo "Sexta-feira\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Dia inválido\n";
        break;
}

echo "\n";

// ============================================================
// Questão 6 — Operadores de comparação
// ============================================================
echo "--- Questão 6: Operadores de comparação ---\n";

$a = "10";
$b = 10;

if ($a == $b) {
    echo "\$a == \$b é TRUE (igualdade fraca — compara apenas o valor, ignorando o tipo)\n";
} else {
    echo "\$a == \$b é FALSE\n";
}

if ($a === $b) {
    echo "\$a === \$b é TRUE (igualdade estrita — compara valor E tipo)\n";
} else {
    echo "\$a === \$b é FALSE (igualdade estrita — o tipo é diferente: string vs integer)\n";
}

echo "\n";

// ============================================================
// Questão 7 — Classificação de IMC
// ============================================================
echo "--- Questão 7: Classificação de IMC ---\n";

$peso = 75;
$altura = 1.80;

$imc = $peso / ($altura ** 2);
echo "IMC calculado: " . number_format($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso\n";
} elseif ($imc <= 24.9) {
    echo "Classificação: Peso normal\n";
} elseif ($imc <= 29.9) {
    echo "Classificação: Sobrepeso\n";
} else {
    echo "Classificação: Obesidade\n";
}

echo "\n";

// ============================================================
// Questão 8 — Operadores lógicos — acesso ao sistema
// ============================================================
echo "--- Questão 8: Operadores lógicos — acesso ao sistema ---\n";

$usuario = "admin";
$senha = "1234";

if ($usuario === "admin" && $senha === "1234") {
    echo "Acesso permitido\n";
} else {
    echo "Acesso negado\n";
}

echo "\n";

// ============================================================
// Questão 9 — Operador de coalescência nula
// ============================================================
echo "--- Questão 9: Operador de coalescência nula ---\n";

$nome = null;

$saudacao = $nome ?? "Visitante";
echo "Olá, {$saudacao}!\n";

echo "\n";

// ============================================================
// Questão 10 — Desconto por faixa de preço
// ============================================================
echo "--- Questão 10: Desconto por faixa de preço ---\n";

$preco = 250;

if ($preco > 500) {
    $desconto = 0.15;
} elseif ($preco >= 200) {
    $desconto = 0.10;
} else {
    $desconto = 0.05;
}

$valorDesconto = $preco * $desconto;
$precoFinal = $preco - $valorDesconto;

echo "Preço original: R$ " . number_format($preco, 2, ',', '.') . "\n";
echo "Desconto aplicado: " . ($desconto * 100) . "% (R$ " . number_format($valorDesconto, 2, ',', '.') . ")\n";
echo "Preço final: R$ " . number_format($precoFinal, 2, ',', '.') . "\n";

echo "\n";

// ============================================================
// Questão 11 — Conversão de temperatura
// ============================================================
echo "--- Questão 11: Conversão de temperatura ---\n";

$celsius = 36.5;
$tipo = "F";

if ($tipo == "F") {
    $convertido = $celsius * 9 / 5 + 32;
    echo "{$celsius}°C = {$convertido}°F\n";
} elseif ($tipo == "K") {
    $convertido = $celsius + 273.15;
    echo "{$celsius}°C = {$convertido}K\n";
} else {
    echo "Tipo de conversão inválido\n";
}

echo "\n";

// ============================================================
// Questão 12 — Operador de atribuição combinado
// ============================================================
echo "--- Questão 12: Operador de atribuição combinado ---\n";

$total = 100;
echo "Valor inicial: $total\n";

$total += 50;
echo "Após += 50: $total\n";

$total -= 30;
echo "Após -= 30: $total\n";

$total *= 2;
echo "Após *= 2: $total\n";

$total /= 4;
echo "Após /= 4: $total\n";

echo "\n";

// ============================================================
// Questão 13 — Classificação de triângulo
// ============================================================
echo "--- Questão 13: Classificação de triângulo ---\n";

$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if (
    ($lado1 + $lado2 > $lado3) &&
    ($lado1 + $lado3 > $lado2) &&
    ($lado2 + $lado3 > $lado1)
) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Triângulo equilátero (lados: $lado1, $lado2, $lado3)\n";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Triângulo isósceles (lados: $lado1, $lado2, $lado3)\n";
    } else {
        echo "Triângulo escaleno (lados: $lado1, $lado2, $lado3)\n";
    }
} else {
    echo "Os valores $lado1, $lado2 e $lado3 NÃO podem formar um triângulo\n";
}

echo "\n";

// ============================================================
// Questão 14 — Categoria de idade
// ============================================================
echo "--- Questão 14: Categoria de idade ---\n";

$idade = 25;

if ($idade >= 0 && $idade <= 11) {
    echo "Criança ($idade anos)\n";
} elseif ($idade <= 17) {
    echo "Adolescente ($idade anos)\n";
} elseif ($idade <= 29) {
    echo "Jovem adulto ($idade anos)\n";
} elseif ($idade <= 59) {
    echo "Adulto ($idade anos)\n";
} else {
    echo "Idoso ($idade anos)\n";
}

echo "\n";

// ============================================================
// Questão 15 — Verificação de múltiplos
// ============================================================
echo "--- Questão 15: Verificação de múltiplos ---\n";

$numero = 15;

if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "FizzBuzz\n";
} elseif ($numero % 3 == 0) {
    echo "Fizz\n";
} elseif ($numero % 5 == 0) {
    echo "Buzz\n";
} else {
    echo "$numero\n";
}