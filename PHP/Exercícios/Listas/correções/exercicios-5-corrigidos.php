<?php

# exercício 1

$frutas = ['Maçã', 'Banana', 'Laranja', 'Uva', 'Manga'];

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}

# exercício 2

$pessoas = [
    'João' => 25,
    'Maria' => 30,
    'Carlos' => 22,
    'Ana' => 28
];

foreach ($pessoas as $nome => $idade) {
    echo "Nome: $nome, Idade: $idade\n";
}

# exercício 3

$cores = ['vermelho', 'azul', 'verde'];

array_push($cores, 'amarelo'); // mesma coisa que $cores[] = "amarelo"
array_unshift($cores, 'preto'); // adiciona no início

print_r($cores);

# exercício 4

$numeros = [10, 20, 30, 40, 50];

array_shift($numeros);  // remove o primeiro (10)
array_pop($numeros);     // remove o último (50)

print_r($numeros);

# exercício 5

$numeros = [5, 12, 3, 18, 7, 25, 9, 14];

echo "Total de elementos: " . count($numeros) . "\n";

$maiores = 0;

foreach ($numeros as $n) {

    if ($n > 10) {

        $maiores++;
    }
}

echo "Maiores que 10: $maiores\n";

# exercício 6

$cidades = ['São Paulo', 'Rio de Janeiro', 'Curitiba', 'Belo Horizonte', 'Salvador'];

if (in_array('Curitiba', $cidades)) {

    $indice = array_search('Curitiba', $cidades);

    echo "Curitiba encontrada na posição: $indice\n";
}

# exercício 7

$notas = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];

sort($notas);
echo "Crescente: ";
print_r($notas);

rsort($notas);
echo "Decrescente: ";
print_r($notas);

# exercício 8

$produtos = [
    'Teclado' => 120.00,
    'Mouse' => 50.00,
    'Monitor' => 900.00,
    'Headset' => 200.00,
    'Webcam' => 85.00
];

asort($produtos);

print_r($produtos);

# exercício 9

$letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

$fatia = array_slice($letras, 2, 4); // posição 2, pega 4 elementos (C, D, E, F)

print_r($fatia);

# exercício 10

$turmaA = ['Ana', 'Bruno', 'Carlos'];
$turmaB = ['Diana', 'Eduardo', 'Fernanda'];

$todos = array_merge($turmaA, $turmaB);

print_r($todos);

# exercício 11

$tags = ['php', 'html', 'css', 'php', 'javascript', 'html', 'css', 'python'];

$unicas = array_unique($tags); // remove duplicatas

print_r($unicas);

$unicas = array_values($unicas); // array_values reindexa

print_r($unicas);

# exercício 12

$fila = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto'];

// forma nativa
$invertido = array_reverse($fila);

print_r($invertido);

// forma manual
$invertidoManual = [];

for ($i = count($fila) - 1; $i >= 0; $i--) {

    $invertidoManual[] = $fila[$i];
}

print_r($invertidoManual);

?>
