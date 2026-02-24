<?php 

echo "===== Exercício 11 =====\n";
$s1 = "Joao,Maria,Pedro,Ana";
$a1 = explode(",",$s1);

foreach($a1 as $nome){
    echo $nome ."\n";
}

echo "===== Exercício 12 =====\n";
$a2 = ["HTML", "CSS", "JS", "PHP"];
$s2 = implode("|", $a2);

echo $s2."\n";

echo "===== Exercício 13 =====\n";
$s3 = 42;

echo str_pad($s3, 5, "0", STR_PAD_LEFT) . "\n";
echo str_pad($s3, 10, ".", STR_PAD_RIGHT) . "\n";

echo "===== Exercício 14 =====\n";
$s4 = 1234567.891;
$f1 =  "R$ " . number_format($s4, 2, ',', '.');
echo $f1. "\n";

echo "===== Exercício 15 =====\n";
$s5 = "arquivo_relatorio.pdf";
var_export(str_starts_with($s5, "arquivo"));
echo "\n";
var_export(str_ends_with($s5, "arquivo"));
echo "\n";


echo "===== Exercício 16 =====\n";
$s6 = "O PHP eh uma linguagem de programacao server-side";

var_export(str_contains($s6, "server-side"));
echo "\n";
var_export(str_contains($s6, "client-side"));
echo "\n";

echo "===== Exercício 17 =====\n";
$s7 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

echo str_shuffle($s7). "\n";
echo substr(str_shuffle($s7), 0, 8). "\n";

echo "===== Exercício 18 =====\n";
$s8 = "PHP e uma linguagem popular para desenvolvimento web";

echo str_word_count($s8)."\n";

$palavras = str_word_count($s8, 1);
$unicas = array_unique($palavras);
//var_export($unicas);
$resultado = array_values($unicas);

print_r($resultado);
?>