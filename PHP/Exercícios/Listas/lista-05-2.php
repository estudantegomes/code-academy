<?php

echo "===== Exercício 13 =====\n";
$s = [2500, 3200, 1800, 4500, 2900, 3700];

echo array_sum($s) . "\n";
echo array_sum($s) / count($s) . "\n";

echo "===== Exercício 14 =====\n";
$i = [12, 18, 25, 15, 30, 17, 21, 16];
$mi = array_values(array_filter($i, function ($n) {
    return $n >= 18;
}));

print_r($mi);
echo "\n";

echo "===== Exercício 15 =====\n";
$p = [100, 250, 80, 320, 150];

$pm = array_map(function ($produto) {
    return $produto * 0.9;
}, $p);

print_r($pm);
echo "\n";

echo "===== Exercício 16 =====\n";
$a = array(
    "João" => [8.5, 7.0, 9.0],
    "Maria" => [9.5, 10.0, 9.8],
    "Pedro" => [6.0, 5.5, 4.0],
    "Ana" => [10.0, 9.0, 10.0]
);

foreach ($a as $nome => $notas) {
    $media = number_format(array_sum($notas) / count($notas), 2, ',');

    echo $nome . "\nMédia: " . $media;

    if ($media > 7) {
        echo "\nAprovado\n\n";
    } else echo "\nReprovado\n\n";
}

echo "===== Exercício 17 =====\n";
$estoque = array(
    'Camiseta' => 50,
    'Calça' => 30,
    'Tenis' => 15,
    'Boné' => 80,
    'Meia' => 100
);

foreach ($estoque as $produto => $preco) {
    echo "Apenas descrição: " . $produto . "\n";
}

foreach ($estoque as $produto => $preco) {
    echo "Apenas preço: " . $preco . "\n";
}

echo "===== Exercício 18 =====\n";
$d = ['PHP', 'JavaScript', 'Python', 'Java'];
$n = [8.5, 7.0, 9.2, 6.8];

$r1 = array_merge($d, $n);
$r2 = array_combine($d, $n);

print_r($r1);
print_r($r2);

echo "\n";

//Array_merge apenas junta dois vetores, indexando sequencialmente na ordem dos dados. Já array_combine realiza a associação desses valores no modelo chave/valor.

echo "===== Exercício 19 =====\n";
$itens = [["nome" => "Mouse", "preco" => 50], ["nome" => "Teclado", "preco" => 120], ["nome" => "Monitor", "preco" => 900], ["nome" => "Headset", "preco" => 200]];

$total = array_reduce($itens, function ($soma, $item) {
    return $soma + $item["preco"];
}, 0);

print_r($total);

?>