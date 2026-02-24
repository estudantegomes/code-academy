<?php

// ============================================================
// Questão 1 — Contagem simples com for
// ============================================================
echo "--- Questão 1: Contagem simples com for ---\n";

for ($i = 1; $i <= 20; $i++) {
    echo "$i\n";
}

echo "\n";

// ============================================================
// Questão 2 — Contagem regressiva com while
// ============================================================
echo "\n--- Questão 2: Contagem regressiva com while ---\n";

$i = 10;

while ($i >= 0) {
    echo "$i\n";
    --$i;
}

echo "Lançar!\n";

echo "\n";

// ============================================================
// Questão 3 — Soma dos números pares
// ============================================================
echo "\n--- Questão 3: Soma dos números pares ---\n";

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        $soma += $i;
    }
}

echo $soma;

echo "\n";

// ============================================================
// Questão 4 — Tabuada com for
// ============================================================
echo "\n--- Questão 4: Tabuada com for ---\n";

$numero = 7;

for ($i =  1; $i <= 10; $i++) {
    $resultado = $numero * $i;

    echo "7 x $i = $resultado\n";
}

// ============================================================
// Questão 5 — Fatorial com while
// ============================================================
echo "\n--- Questão 5: Fatorial com while ---\n";

$n = 6;
$i = $n - 1;
$resultado = $n;

while ($i > 1) {
    $resultado *= $i;

    $i--;
}

echo "O fatorial de $n é $resultado\n";

#resolução com for
#
#$n = 6;
#$resultado = $n;
#
#for ($i = $n - 1; $i > 1; $i--) {
#
#    $resultado *= $i;
#}

echo "O fatorial de $n é $resultado\n";

// ============================================================
// Questão 6 — Números ímpares com for + if
// ============================================================
echo "\n--- Questão 6: Números ímpares com for + if ---\n";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 !== 0) {
        echo "$i\n";
    }
}

echo "\n";

// ============================================================
// Questão 7 — Validação com do-while
// ============================================================
echo "\n--- Questão 7: Validação com do-while ---\n";
#notas validas sao entre 0 e 10

$tentativas = [15, -3, 2, 3];
$i = 0;

do {
    $nota = $tentativas[$i];

    if ($nota <= 10 && $nota >= 0) {
        echo "Primeira nota válida: $nota\n";
        break;
    }

    $i++;
} while ($i < count($tentativas));

# resolução com foreach
#$tentativas = [15, -3, 7];
#
#foreach ($tentativas as $nota) {
#    if ($nota <= 10 && $nota >= 0) {
#        echo "Primeira nota válida: $nota";
#        break;
#    }
#}

echo "\n";

// ============================================================
// Questão 8 — Somatório com break
// ============================================================
echo "\n--- Questão 8: Somatório com break ---\n";

$soma = 0;

for ($i = 1; $i <= 100; $i++) {

    $soma += $i;

    if ($soma > 200) {

        echo "Valor de \$i: $i\n";
        echo "Soma total: $soma\n";
        break;
    }
}

echo "\n";

// ============================================================
// Questão 9 — Pular múltiplos de 3 com continue
// ============================================================
echo "\n--- Questão 9: Pular múltiplos de 3 com continue ---\n";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }
    echo "$i ";
}

echo "\n";

// ============================================================
// Questão 10 — Sequência de Fibonacci
// ============================================================

echo "\n--- Questão 10: Sequência de Fibonacci ---\n";

$termoAnterior = 0;
$termo = 0;
$proximoTermo = 1;

for ($i = 0; $i < 15; $i++) {
    echo "$termo, ";

    # Preparação para próxima exibição

    $termoAnterior = $termo;
    # O termo anterior será o termo atual, que é o último termo exibido

    $termo = $proximoTermo;
    # O termo atual será o próximo termo no próximo ciclo

    $proximoTermo = $termo + $termoAnterior;
    # O próximo termo é a soma do termo atual e do termo anterior
}

echo "\n";

// ============================================================
// Questão 11 — Média de valores com foreach
// ============================================================
echo "\n--- Questão 11: Média de valores com foreach ---\n";

$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo number_format($media, 2);

echo "\n";

// ============================================================
// Questão 12 — Maior e menor valor de um array
// ============================================================
echo "\n--- Questão 12: Maior e menor valor de um array ---\n";

$valores = [34, 12, 89, 3, 56, 71, 23];
$maiorValor = $valores[0];
$menorValor = $valores[0];

foreach ($valores as $valor) {
    if ($valor > $maiorValor) {
        $maiorValor = $valor;
    } elseif ($valor < $menorValor) {
        $menorValor = $valor;
    }
}

echo "Maior valor: $maiorValor\nMenor valor: $menorValor";

echo "\n";

// ============================================================
// Questão 13 — Inverter uma string com for
// ============================================================
echo "\n--- Questão 13: Inverter uma string com for ---\n";

$original = "PHP e legal";
$reverso = "";
# a função predefinada strlen retorna o tamanho da string

for ($i = (strlen($original) - 1); $i >= 0; $i--) {
    $reverso .= $original[$i];
}

echo $reverso;

echo "\n";

// ============================================================
// Questão 14 — Números primos até 50
// ============================================================
echo "\n--- Questão 14: Números primos até 50 ---\n";

# Loop de 2 a 50
for ($i = 2; $i <= 50; $i++) {

    $primo = true;

    # Loop de 2 a $i
    for ($y = 2; $y < $i; $y++) {

        if ($i % $y === 0) {

            $primo = false;
            break;
        }
    }

    echo $primo ? "$i\n" : "";
}

echo "\n";

// ============================================================
// Questão 15 — Array associativo com foreach
// ============================================================
echo "\n--- Questão 15: Array associativo com foreach ---\n";

$aluno = [
    "nome" => "Maria",
    "idade" => 22,
    "curso" => "Engenharia",
    "media" => 8.7
];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor\n";
}

echo "\n";
