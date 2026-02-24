<?php

echo "==========================================\n";
echo "  RESOLUÇÃO DOS EXERCÍCIOS - STRINGS PHP  \n";
echo "==========================================\n\n";

// ============================================================
// Exercício 01 – Comprimento de uma string
// ============================================================
echo "\n--- Exercício 01: Comprimento de uma string ---\n";

$frase = "Aprender PHP eh divertido!";
echo "Frase: \"$frase\"\n";
echo "Número de caracteres: " . strlen($frase) . "\n";
// Nota: strlen() conta bytes, não caracteres multibyte.
// Para strings com acentos, use mb_strlen():
$frase = "Aprender PHP é divertido!";
echo "Número de caracteres (mb_strlen): " . mb_strlen($frase, "UTF-8") . "\n";

// ============================================================
// Exercício 02 – Converter para maiúsculas e minúsculas
// ============================================================
echo "\n--- Exercício 02: Maiúsculas e minúsculas ---\n";

$texto = "Hello, World!";
echo "Original: \"$texto\"\n";
echo "Maiúsculas (strtoupper): " . strtoupper($texto) . "\n";
echo "Minúsculas (strtolower): " . strtolower($texto) . "\n";

// Em português:
$texto = "Olá, Mundo!";
echo "Original: \"$texto\"\n";
echo "Maiúsculas (strtoupper): " . mb_strtoupper($texto, "UTF-8") . "\n";
echo "Minúsculas (strtolower): " . mb_strtolower($texto, "UTF-8") . "\n";

// ============================================================
// Exercício 03 – Primeira letra maiúscula
// ============================================================
echo "\n--- Exercício 03: Primeira letra maiúscula ---\n";

$str1 = "programação web";
$str2 = "curso de desenvolvimento web";

echo ucfirst($str1) . "\n";
echo ucwords($str2) . "\n";

// ============================================================
// Exercício 04 – Extrair parte de uma string
// ============================================================
echo "\n--- Exercício 04: Extrair parte de uma string ---\n";

$str = "abcdefghij";

echo "String original: $str\n";
echo "a) 3 primeiros caracteres: " . substr($str, 0, 3) . "\n";
echo "b) Posição 4 até 7: " . substr($str, 4, 4) . "\n";
echo "c) 2 últimos caracteres: " . substr($str, -2) . "\n";


// ============================================================
// Exercício 05 – Encontrar posição de substring
// ============================================================
echo "\n--- Exercício 05: Posição de substring ---\n";

$frase = "O rato roeu a roupa do rei de Roma";

echo strpos($frase, "roupa") . "\n";

echo strrpos($frase, "r");

// ============================================================
// Exercício 06 – Substituir texto
// ============================================================
echo "\n--- Exercício 06: Substituir texto ---\n";

$frase = "Eu gosto de Java";
echo "str_replace: " . str_replace("Java", "PHP", $frase) . "\n";

$frase2 = "Eu gosto de JAVA e java";
echo "str_ireplace (case-insensitive): " . str_ireplace("java", "PHP", $frase2) . "\n";

// ============================================================
// Exercício 07 – Remover espaços em branco
// ============================================================
echo "\n--- Exercício 07: Remover espaços ---\n";

$str = "   Olá, Mundo!   ";
echo trim($str) . "\n";
echo ltrim($str) . "\n";
echo rtrim($str) . "\n";

// ============================================================
// Exercício 08 – Repetir uma string
// ============================================================
echo "\n--- Exercício 08: Repetir string ---\n";

echo str_repeat("-", 40) . "\n";
echo str_repeat("*", 20) . "\n";

// ============================================================
// Exercício 09 – Inverter uma string
// ============================================================
echo "\n--- Exercício 09: Inverter string e palíndromo ---\n";

$str = "PHP";
echo strrev($str) . "\n";

$palavra = "arara";
$invertida =  strrev($palavra);

if ($palavra === $invertida) {
    echo "\"$palavra\" É um palíndromo!\n";
} else {
    echo "\"$palavra\" NÃO é um palíndromo.\n";
}

// ============================================================
// Exercício 10 – Contar ocorrências de substring
// ============================================================
echo "\n--- Exercício 10: Contar ocorrências ---\n";

$str = "banana";
echo substr_count($str, "ana") . "\n";
echo substr_count($str, "a") . "\n";
