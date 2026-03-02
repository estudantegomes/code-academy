<?php

echo "==========================================\n";
echo "  RESOLUÇÃO DOS EXERCÍCIOS - STRINGS PHP  \n";
echo "==========================================\n\n";

// ============================================================
// Exercício 11 – Dividir string em array
// ============================================================
echo "\n--- Exercício 11: Dividir string (explode) ---\n";

$nomes = "João,Maria,Pedro,Ana";
$array = explode(",", $nomes);

foreach ($array as $nome) {
    echo "  - $nome\n";
}

// ============================================================
// Exercício 12 – Juntar array em string
// ============================================================
echo "\n--- Exercício 12: Juntar array (implode) ---\n";

$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

$resultado = implode(" | ", $tecnologias);

echo $resultado . "\n";

// ============================================================
// Exercício 13 – Preencher string (padding)
// ============================================================
echo "\n--- Exercício 13: Padding (str_pad) ---\n";

$numero = 42;
echo $numero . "\n";

echo str_pad($numero, 5, "0", STR_PAD_LEFT) . "\n";

$numero = 42;
echo str_pad($numero, 10, ".") . "\n";

// ============================================================
// Exercício 14 – Formatar número como moeda
// ============================================================
echo "\n--- Exercício 14: Formatar número ---\n";

$valor = 1234567.891;
echo $valor . "\n";
echo number_format($valor, 2, ",", ".") . "\n";

// ============================================================
// Exercício 15 – Verificar início e fim de string
// ============================================================
echo "\n--- Exercício 15: Início e fim de string ---\n";

$arquivo = "arquivo_relatorio.pdf";

echo str_starts_with($arquivo, "arquivo") . "\n";

echo str_ends_with($arquivo, ".pdf") . "\n";

// ============================================================
// Exercício 16 – Verificar se contém substring
// ============================================================
echo "\n--- Exercício 16: Verificar substring (str_contains) ---\n";

$frase = "O PHP eh uma linguagem de programação server-side";

echo str_contains($frase, "server-side") . "\n";

echo str_contains($frase, "client-side") . "\n";

// ============================================================
// Exercício 17 – Embaralhar e extrair caracteres aleatórios
// ============================================================
echo "\n--- Exercício 17: Código aleatório ---\n";

$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$embaralhado = str_shuffle($caracteres);

echo $embaralhado . "\n";
echo substr($embaralhado, 0, 8);

// ============================================================
// Exercício 18 – Contagem de palavras e lista de palavras
// ============================================================
echo "\n--- Exercício 18: Contagem de palavras ---\n";

$frase = "PHP eh uma linguagem popular para desenvolvimento web";

$totalPalavras = str_word_count($frase);
echo $totalPalavras . "\n";

$arrayPalavras = str_word_count($frase, 1);

print_r($arrayPalavras);

echo "\n==========================================\n";
echo "  FIM DOS EXERCÍCIOS                       \n";
echo "==========================================\n";
