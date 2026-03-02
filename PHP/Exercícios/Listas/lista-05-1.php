<?php

echo "===== Exercício 1 =====\n";
$a1 = ["Laranja", "Maçã", "Uva", "Kiwi", "Morango"];

foreach($a1 as $fruta){
    echo $fruta."\n";
}

echo "===== Exercício 2 =====\n";
$a2 = array(
    "João" => 20,
    "Maria" => 21,
    "Antônio" => 22,
    "Larissa" => 23
);

foreach($a2 as $nome => $idade){
    echo $nome . ": " . $idade . "\n";
}

echo "===== Exercício 3 =====\n";
$c = ["vermelho", "azul","verde"];
array_push($c, "amarelo");
//adiciona ao início
array_unshift($c, "preto");

print_r($c);
echo "\n";

echo "===== Exercício 4 =====\n";
$n = [10, 20 , 30, 40, 50];
//remove o primeiro
array_shift($n);
print_r($n);
echo "\n";

//remove o último
array_pop($n);
print_r($n);
echo "\n";

echo "===== Exercício 5 =====\n";
$n2 = [1,20,3,40,5,6,70,8];
print_r($n2);
echo "Quantidade de elementos na array: " . count($n2) . "\n";

$cont = 0;
for($i = 0; $i < 8; $i++){
    if($n2[$i] >= 10){
        $cont++;
    }
}

echo "Números acima de 10: " . $cont . "\n";

echo "===== Exercício 6 =====\n";
$a4 = ["São Paulo", "Rio de Janeiro", "Curitiba", "Belo Horizonte", "Salvador"];

var_export(in_array("Curitiba", $a4));
echo "\n";

var_export(array_search("Curitiba", $a4));
echo "\n";

echo "===== Exercício 7 =====\n";
$n3 = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];
sort($n3);

print_r($n3); 
echo "\n";

rsort($n3);
print_r($n3); 
echo "\n";

echo "===== Exercício 8 =====\n";
$produtos = array(
    "Teclado" => 80.00,
    "Mouse" =>  100.00,
    "Monitor" =>  620.00,
    "Gabinete" =>  250.00,
    "Fone de Ouvido" =>  199.90 
);

asort($produtos);
print_r($produtos);

echo "===== Exercício 9 =====\n";
$l1 = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
$l2 = array_slice($l1, 2, 3);

print_r($l2);

echo "===== Exercício 10 =====\n";
$a6 = ['Ana', 'Bruno', 'Carlos'];
$a7 = ['Diana', 'Eduardo', 'Fernanda'];
$a8 = array_merge($a6, $a7);

print_r($a8);

echo "===== Exercício 11 =====\n";
$t1 = ['php', 'html', 'css', 'php', 'javascript', 'css', 'python'];
$t2 = array_values(array_unique($t1));

print_r($t2);

echo "===== Exercício 12 =====\n";
$f1 = ['primeiro', 'segundo', 'terceiro', 'quarto'];

print_r(array_reverse($f1));

for($i = 3; $i >= 0; $i--){
    echo $f1[$i] . "\n";
}

?>